<?php

namespace ContainerPpdRZfJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Command_UserPasswordEncoderService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'security.command.user_password_encoder' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand
     *
     * @deprecated Since symfony/security-bundle 5.3: The "security.command.user_password_encoder" service is deprecated, use "security.command.user_password_hash" instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/security-bundle', '5.3', 'The "security.command.user_password_encoder" service is deprecated, use "security.command.user_password_hash" instead.');

        $container->privates['security.command.user_password_encoder'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand(($container->services['.container.private.security.encoder_factory'] ?? $container->load('get_Container_Private_Security_EncoderFactoryService')), [0 => 'Contao\\User']);

        $instance->setName('security:encode-password');
        $instance->setDescription('Encode a password');

        return $instance;
    }
}