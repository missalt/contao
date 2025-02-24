<?php

namespace ContainerPpdRZfJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Security_AuthenticationEntryPointService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao.security.authentication_entry_point' shared service.
     *
     * @return \Contao\CoreBundle\Security\Authentication\AuthenticationEntryPoint
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Security/Authentication/AuthenticationEntryPoint.php';

        $a = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->privates['contao.security.authentication_entry_point'])) {
            return $container->privates['contao.security.authentication_entry_point'];
        }

        return $container->privates['contao.security.authentication_entry_point'] = new \Contao\CoreBundle\Security\Authentication\AuthenticationEntryPoint($a, ($container->services['uri_signer'] ?? ($container->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner($container->getEnv('APP_SECRET')))), ($container->services['contao.routing.scope_matcher'] ?? $container->getContao_Routing_ScopeMatcherService()));
    }
}
