<?php

namespace ContainerKNpOtw3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_InsertTags_DateService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.listener.insert_tags.date' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\InsertTags\DateListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/InsertTags/DateListener.php';

        return $container->services['contao.listener.insert_tags.date'] = new \Contao\CoreBundle\EventListener\InsertTags\DateListener(($container->services['contao.framework'] ?? $container->getContao_FrameworkService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
