<?php

namespace ContainerKNpOtw3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonolog_Logger_Contao_ErrorService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'monolog.logger.contao.error' shared service.
     *
     * @return \Contao\CoreBundle\Monolog\SystemLogger
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Monolog/SystemLogger.php';

        $a = new \Symfony\Bridge\Monolog\Logger('contao.error');
        $a->pushProcessor(($container->privates['debug.log_processor'] ?? $container->getDebug_LogProcessorService()));
        $a->pushProcessor(($container->privates['contao.monolog.processor'] ?? $container->getContao_Monolog_ProcessorService()));
        $a->pushHandler(($container->privates['monolog.handler.console'] ?? $container->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($container->privates['monolog.handler.main'] ?? $container->getMonolog_Handler_MainService()));
        $a->pushHandler(($container->privates['contao.monolog.handler'] ?? $container->getContao_Monolog_HandlerService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        return $container->services['monolog.logger.contao.error'] = new \Contao\CoreBundle\Monolog\SystemLogger($a, 'ERROR');
    }
}
