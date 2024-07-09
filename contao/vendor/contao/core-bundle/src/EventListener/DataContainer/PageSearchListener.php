<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\CoreBundle\EventListener\DataContainer;

use Contao\CoreBundle\Framework\ContaoFramework;
use Contao\CoreBundle\ServiceAnnotation\Callback;
use Contao\DataContainer;
use Contao\Search;
use Doctrine\DBAL\Connection;

/**
 * @internal
 */
class PageSearchListener
{
    private ContaoFramework $framework;
    private Connection $connection;

    public function __construct(ContaoFramework $framework, Connection $connection)
    {
        $this->framework = $framework;
        $this->connection = $connection;
    }

    /**
     * @Callback(table="tl_page", target="fields.alias.save")
     */
    public function onSaveAlias(string $value, DataContainer $dc): string
    {
        if ($value === $dc->activeRecord->alias) {
            return $value;
        }

        $this->purgeSearchIndex((int) $dc->id);

        return $value;
    }

    /**
     * @Callback(table="tl_page", target="fields.noSearch.save")
     */
    public function onSaveNoSearch(string $value, DataContainer $dc): string
    {
        if (!$value || $value === $dc->activeRecord->noSearch) {
            return $value;
        }

        $this->purgeSearchIndex((int) $dc->id);

        return $value;
    }

    /**
     * @Callback(table="tl_page", target="fields.robots.save")
     */
    public function onSaveRobots(string $value, DataContainer $dc): string
    {
        if ($value === $dc->activeRecord->robots || 0 !== strncmp($value, 'noindex', 7)) {
            return $value;
        }

        $this->purgeSearchIndex((int) $dc->id);

        return $value;
    }

    /**
     * @Callback(table="tl_page", target="config.ondelete", priority=16)
     */
    public function onDelete(DataContainer $dc): void
    {
        if (!$dc->id) {
            return;
        }

        $this->purgeSearchIndex((int) $dc->id);
    }

    private function purgeSearchIndex(int $pageId): void
    {
        $urls = $this->connection->fetchFirstColumn(
            'SELECT url FROM tl_search WHERE pid=:pageId',
            ['pageId' => $pageId]
        );

        $search = $this->framework->getAdapter(Search::class);

        foreach ($urls as $url) {
            $search->removeEntry($url);
        }
    }
}
