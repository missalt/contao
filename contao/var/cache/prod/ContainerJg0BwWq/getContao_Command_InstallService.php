<?php

namespace ContainerJg0BwWq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Command_InstallService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.command.install' shared service.
     *
     * @return \Contao\CoreBundle\Command\InstallCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Command/InstallCommand.php';

        $container->services['contao.command.install'] = $instance = new \Contao\CoreBundle\Command\InstallCommand(\dirname(__DIR__, 4), 'files', (\dirname(__DIR__, 4).'/assets/images'));

        $instance->setName('contao:install');
        $instance->setDescription('Installs the required Contao directories.');

        return $instance;
    }
}