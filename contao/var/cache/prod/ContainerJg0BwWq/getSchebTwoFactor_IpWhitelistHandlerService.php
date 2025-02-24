<?php

namespace ContainerJg0BwWq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_IpWhitelistHandlerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'scheb_two_factor.ip_whitelist_handler' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\IpWhitelistHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Handler/AuthenticationHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Handler/IpWhitelistHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/IpWhitelist/IpWhitelistProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/IpWhitelist/DefaultIpWhitelistProvider.php';

        return new \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\IpWhitelistHandler($container->load('getSchebTwoFactor_TrustedDeviceHandlerService'), new \Scheb\TwoFactorBundle\Security\TwoFactor\IpWhitelist\DefaultIpWhitelistProvider([]));
    }
}
