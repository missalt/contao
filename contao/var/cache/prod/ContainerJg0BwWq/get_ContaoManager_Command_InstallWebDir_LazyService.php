<?php

namespace ContainerJg0BwWq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ContaoManager_Command_InstallWebDir_LazyService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private '.contao_manager.command.install_web_dir.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.contao_manager.command.install_web_dir.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('contao:install-web-dir', [], 'Installs the files in the public directory.', false, function () use ($container): \Contao\ManagerBundle\Command\InstallWebDirCommand {
            return ($container->privates['contao_manager.command.install_web_dir'] ?? $container->load('getContaoManager_Command_InstallWebDirService'));
        });
    }
}
