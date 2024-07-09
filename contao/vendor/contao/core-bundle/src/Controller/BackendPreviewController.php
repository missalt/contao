<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\CoreBundle\Controller;

use Contao\CoreBundle\Event\ContaoCoreEvents;
use Contao\CoreBundle\Event\PreviewUrlConvertEvent;
use Contao\CoreBundle\Security\Authentication\FrontendPreviewAuthenticator;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

/**
 * This controller handles the back end preview call and redirects to the
 * requested front end page while ensuring that the /preview.php entry point is
 * used. When requested, the front end user gets authenticated.
 *
 * @Route("%contao.backend.route_prefix%/preview", name="contao_backend_preview", defaults={"_scope" = "backend", "_allow_preview" = true, "_store_referrer" = false})
 */
class BackendPreviewController
{
    private string $previewScript;
    private FrontendPreviewAuthenticator $previewAuthenticator;
    private EventDispatcherInterface $dispatcher;
    private AuthorizationCheckerInterface $authorizationChecker;

    public function __construct(string $previewScript, FrontendPreviewAuthenticator $previewAuthenticator, EventDispatcherInterface $dispatcher, AuthorizationCheckerInterface $authorizationChecker)
    {
        $this->previewScript = $previewScript;
        $this->previewAuthenticator = $previewAuthenticator;
        $this->dispatcher = $dispatcher;
        $this->authorizationChecker = $authorizationChecker;
    }

    public function __invoke(Request $request): Response
    {
        // Skip the redirect if there is no preview script, otherwise we will
        // end up in an endless loop (see #1511)
        if ($this->previewScript && substr($request->getScriptName(), \strlen($request->getBasePath())) !== $this->previewScript) {
            $qs = $request->getQueryString();

            return new RedirectResponse($request->getBasePath().$this->previewScript.$request->getPathInfo().($qs ? '?'.$qs : ''));
        }

        if (!$this->authorizationChecker->isGranted('ROLE_USER')) {
            return new Response('Access denied', Response::HTTP_FORBIDDEN);
        }

        // Switch to a particular member (see contao/core#6546)
        if (
            ($frontendUser = $request->query->get('user'))
            && !$this->previewAuthenticator->authenticateFrontendUser($frontendUser, false)
        ) {
            $this->previewAuthenticator->removeFrontendAuthentication();
        }

        $urlConvertEvent = new PreviewUrlConvertEvent($request);

        $this->dispatcher->dispatch($urlConvertEvent, ContaoCoreEvents::PREVIEW_URL_CONVERT);

        if (null !== ($response = $urlConvertEvent->getResponse())) {
            return $response;
        }

        if ($targetUrl = $urlConvertEvent->getUrl()) {
            return new RedirectResponse($targetUrl);
        }

        return new RedirectResponse($request->getBaseUrl().'/');
    }
}
