<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\CoreBundle\EventListener;

use Contao\CoreBundle\Routing\ScopeMatcher;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\EventListener\AbstractSessionListener;

/**
 * @internal
 */
class MakeResponsePrivateListener
{
    public const DEBUG_HEADER = 'Contao-Private-Response-Reason';

    private ScopeMatcher $scopeMatcher;

    public function __construct(ScopeMatcher $scopeMatcher)
    {
        $this->scopeMatcher = $scopeMatcher;
    }

    public function disableSymfonyAutoCacheControl(ResponseEvent $event): void
    {
        if (!$this->scopeMatcher->isContaoMainRequest($event)) {
            return;
        }

        // Disable the default Symfony auto cache control
        $event->getResponse()->headers->set(AbstractSessionListener::NO_AUTO_CACHE_CONTROL_HEADER, '1');
    }

    /**
     * Make sure that the current response becomes a private response if any
     * of the following conditions are true.
     *
     *   1. An Authorization header is present and not empty
     *   2. The session was started by a request header
     *   3. The response sets a cookie (including session cookies as this listener comes after the session listener)
     *   4. The response has a "Vary: Cookie" header and the request provides at least one cookie
     *
     * Some of this logic is also already implemented in the HttpCache (1, 2 and 3), but we
     * want to make sure it works for any reverse proxy without having to configure too much.
     */
    public function makeResponsePrivate(ResponseEvent $event): void
    {
        if (!$this->scopeMatcher->isContaoMainRequest($event)) {
            return;
        }

        $request = $event->getRequest();
        $response = $event->getResponse();

        // If the response is not cacheable for a reverse proxy, we don't have to do anything anyway
        if (!$response->isCacheable()) {
            return;
        }

        // 1) An Authorization header is present and not empty
        if ('' !== (string) $request->headers->get('Authorization')) {
            $this->makePrivate($response, 'authorization');

            return;
        }

        // 2) The session was started by a request header
        if ($request->hasSession(true) && $request->hasPreviousSession()) {
            $this->makePrivate($response, 'session-cookie');

            return;
        }

        // 3) The response sets a cookie (including session cookies as this listener comes after the session listener)
        $cookies = $response->headers->getCookies();

        if (0 !== \count($cookies)) {
            $this->makePrivate(
                $response,
                sprintf(
                    'response-cookies (%s)',
                    implode(', ', array_map(static fn (Cookie $cookie) => $cookie->getName(), $cookies))
                )
            );

            return;
        }

        // 4) The response has a "Vary: Cookie" header and the request provides at least one cookie
        if ($request->cookies->count() && \in_array('cookie', array_map('strtolower', $response->getVary()), true)) {
            $this->makePrivate(
                $response,
                sprintf('request-cookies (%s)', implode(', ', array_keys($request->cookies->all())))
            );
        }
    }

    private function makePrivate(Response $response, string $reason): void
    {
        $response->setPrivate();
        $response->headers->set(self::DEBUG_HEADER, $reason);
    }
}