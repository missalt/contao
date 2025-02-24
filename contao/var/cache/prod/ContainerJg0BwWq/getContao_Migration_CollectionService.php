<?php

namespace ContainerJg0BwWq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Migration_CollectionService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao.migration.collection' shared service.
     *
     * @return \Contao\CoreBundle\Migration\MigrationCollection
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Migration/MigrationCollection.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Migration/MigrationInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Migration/AbstractMigration.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Migration/Version400/Version400Update.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Migration/Version401/Version410Update.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Migration/Version403/Version430Update.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Migration/Version404/Version440Update.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Migration/Version404/Version447Update.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Migration/Version405/Version450Update.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Migration/Version406/Version460Update.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Migration/Version407/Version470Update.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Migration/Version408/Version480Update.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Migration/Version409/CeAccessMigration.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Migration/Version409/PlayerColorMigration.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Migration/Version410/DropSearchMigration.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Migration/Version410/OrderFieldMigration.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Migration/Version410/RoutingMigration.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Migration/Version411/MergeWebfontsMigration.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Migration/Version411/RemoveJsHighlightMigration.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Migration/Version411/TwoFactorBackupCodesMigration.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Migration/Version412/AllowedExcludedFieldsMigration.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Migration/Version412/PageLanguageMigration.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Migration/Version413/AlwaysForwardMigration.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Migration/Version413/BooleanFieldsMigration.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Migration/Version413/FileExtensionMigration.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Migration/Version413/RelLightboxMigration.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/newsletter-bundle/src/Migration/Version410/DenyListMigration.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());
        $b = ($container->services['contao.framework'] ?? $container->getContao_FrameworkService());
        $c = ($container->services['.container.private.filesystem'] ?? ($container->services['.container.private.filesystem'] = new \Symfony\Component\Filesystem\Filesystem()));
        $d = ($container->services['contao.resource_finder'] ?? $container->getContao_ResourceFinderService());

        return $container->privates['contao.migration.collection'] = new \Contao\CoreBundle\Migration\MigrationCollection(['Contao\\CoreBundle\\Migration\\Version400\\Version400Update' => new \Contao\CoreBundle\Migration\Version400\Version400Update($a), 'Contao\\CoreBundle\\Migration\\Version401\\Version410Update' => new \Contao\CoreBundle\Migration\Version401\Version410Update($a, $b), 'Contao\\CoreBundle\\Migration\\Version403\\Version430Update' => new \Contao\CoreBundle\Migration\Version403\Version430Update($a), 'Contao\\CoreBundle\\Migration\\Version404\\Version440Update' => new \Contao\CoreBundle\Migration\Version404\Version440Update($a), 'Contao\\CoreBundle\\Migration\\Version404\\Version447Update' => new \Contao\CoreBundle\Migration\Version404\Version447Update($a, ($container->services['translator'] ?? $container->getTranslatorService())), 'Contao\\CoreBundle\\Migration\\Version405\\Version450Update' => new \Contao\CoreBundle\Migration\Version405\Version450Update($a), 'Contao\\CoreBundle\\Migration\\Version406\\Version460Update' => new \Contao\CoreBundle\Migration\Version406\Version460Update($a), 'Contao\\CoreBundle\\Migration\\Version407\\Version470Update' => new \Contao\CoreBundle\Migration\Version407\Version470Update($a, $c, 'files', \dirname(__DIR__, 4)), 'Contao\\CoreBundle\\Migration\\Version408\\Version480Update' => new \Contao\CoreBundle\Migration\Version408\Version480Update($a, $c, $b, \dirname(__DIR__, 4)), 'Contao\\CoreBundle\\Migration\\Version409\\CeAccessMigration' => new \Contao\CoreBundle\Migration\Version409\CeAccessMigration($a, $b), 'Contao\\CoreBundle\\Migration\\Version409\\PlayerColorMigration' => new \Contao\CoreBundle\Migration\Version409\PlayerColorMigration($a), 'Contao\\CoreBundle\\Migration\\Version410\\DropSearchMigration' => new \Contao\CoreBundle\Migration\Version410\DropSearchMigration($a), 'Contao\\CoreBundle\\Migration\\Version410\\OrderFieldMigration' => new \Contao\CoreBundle\Migration\Version410\OrderFieldMigration($a), 'Contao\\CoreBundle\\Migration\\Version410\\RoutingMigration' => new \Contao\CoreBundle\Migration\Version410\RoutingMigration($a, $b, '.html', false), 'Contao\\CoreBundle\\Migration\\Version411\\MergeWebfontsMigration' => new \Contao\CoreBundle\Migration\Version411\MergeWebfontsMigration($a), 'Contao\\CoreBundle\\Migration\\Version411\\RemoveJsHighlightMigration' => new \Contao\CoreBundle\Migration\Version411\RemoveJsHighlightMigration($a), 'Contao\\CoreBundle\\Migration\\Version411\\TwoFactorBackupCodesMigration' => new \Contao\CoreBundle\Migration\Version411\TwoFactorBackupCodesMigration($a), 'Contao\\CoreBundle\\Migration\\Version412\\AllowedExcludedFieldsMigration' => new \Contao\CoreBundle\Migration\Version412\AllowedExcludedFieldsMigration($a), 'Contao\\CoreBundle\\Migration\\Version412\\PageLanguageMigration' => new \Contao\CoreBundle\Migration\Version412\PageLanguageMigration($a), 'Contao\\CoreBundle\\Migration\\Version413\\AlwaysForwardMigration' => new \Contao\CoreBundle\Migration\Version413\AlwaysForwardMigration($a), 'Contao\\CoreBundle\\Migration\\Version413\\BooleanFieldsMigration' => new \Contao\CoreBundle\Migration\Version413\BooleanFieldsMigration($a, $b, $d), 'Contao\\CoreBundle\\Migration\\Version413\\FileExtensionMigration' => new \Contao\CoreBundle\Migration\Version413\FileExtensionMigration($a), 'Contao\\CoreBundle\\Migration\\Version413\\RelLightboxMigration' => new \Contao\CoreBundle\Migration\Version413\RelLightboxMigration($a, $b, $d), 'Contao\\NewsletterBundle\\Migration\\Version410\\DenyListMigration' => new \Contao\NewsletterBundle\Migration\Version410\DenyListMigration($a)]);
    }
}
