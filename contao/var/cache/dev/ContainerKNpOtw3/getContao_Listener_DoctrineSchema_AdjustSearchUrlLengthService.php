<?php

namespace ContainerKNpOtw3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_DoctrineSchema_AdjustSearchUrlLengthService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'contao.listener.doctrine_schema.adjust_search_url_length' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\DoctrineSchema\AdjustSearchUrlLengthListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DoctrineSchema/AdjustSearchUrlLengthListener.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->privates['contao.listener.doctrine_schema.adjust_search_url_length'])) {
            return $container->privates['contao.listener.doctrine_schema.adjust_search_url_length'];
        }

        return $container->privates['contao.listener.doctrine_schema.adjust_search_url_length'] = new \Contao\CoreBundle\EventListener\DoctrineSchema\AdjustSearchUrlLengthListener($a);
    }
}
