<?php

namespace ContainerKNpOtw3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_MGEESJ7Service extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.listener.MGEESJ7' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\GlobalsMapListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/GlobalsMapListener.php';

        return $container->services['contao.listener.MGEESJ7'] = new \Contao\CoreBundle\EventListener\GlobalsMapListener(['FE_MOD' => ['miscellaneous' => ['root_page_dependent_modules' => 'Contao\\ModuleProxy', 'template' => 'Contao\\ModuleProxy'], 'user' => ['two_factor' => 'Contao\\ModuleProxy']]]);
    }
}
