<?php

namespace ContainerKNpOtw3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBackendCsvImportControllerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'Contao\CoreBundle\Controller\BackendCsvImportController' shared service.
     *
     * @return \Contao\CoreBundle\Controller\BackendCsvImportController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/BackendCsvImportController.php';

        return $container->services['Contao\\CoreBundle\\Controller\\BackendCsvImportController'] = new \Contao\CoreBundle\Controller\BackendCsvImportController(($container->services['contao.framework'] ?? $container->getContao_FrameworkService()), ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['translator'] ?? $container->getTranslatorService()), \dirname(__DIR__, 4));
    }
}