<?php

namespace ContainerPpdRZfJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContaoManager_Command_InstallWebDirService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao_manager.command.install_web_dir' shared service.
     *
     * @return \Contao\ManagerBundle\Command\InstallWebDirCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/manager-bundle/src/Command/InstallWebDirCommand.php';

        $container->privates['contao_manager.command.install_web_dir'] = $instance = new \Contao\ManagerBundle\Command\InstallWebDirCommand(\dirname(__DIR__, 4));

        $instance->setName('contao:install-web-dir');
        $instance->setDescription('Installs the files in the public directory.');

        return $instance;
    }
}
