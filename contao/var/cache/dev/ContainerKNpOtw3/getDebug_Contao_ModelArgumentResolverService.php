<?php

namespace ContainerKNpOtw3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_Contao_ModelArgumentResolverService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'debug.contao.model_argument_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/HttpKernel/ModelArgumentResolver.php';

        $a = ($container->services['contao.framework'] ?? $container->getContao_FrameworkService());

        if (isset($container->privates['debug.contao.model_argument_resolver'])) {
            return $container->privates['debug.contao.model_argument_resolver'];
        }

        return $container->privates['debug.contao.model_argument_resolver'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Contao\CoreBundle\HttpKernel\ModelArgumentResolver($a, ($container->services['contao.routing.scope_matcher'] ?? $container->getContao_Routing_ScopeMatcherService())), ($container->services['debug.stopwatch'] ?? ($container->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }
}
