<?php

namespace ContainerPpdRZfJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSitemapControllerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'Contao\CoreBundle\Controller\SitemapController' shared service.
     *
     * @return \Contao\CoreBundle\Controller\SitemapController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/SitemapController.php';

        $container->services['Contao\\CoreBundle\\Controller\\SitemapController'] = $instance = new \Contao\CoreBundle\Controller\SitemapController(($container->services['contao.routing.page_registry'] ?? $container->getContao_Routing_PageRegistryService()));

        $instance->setContainer(($container->privates['.service_locator.LvLjDEU'] ?? $container->get_ServiceLocator_LvLjDEUService())->withContext('Contao\\CoreBundle\\Controller\\SitemapController', $container));

        return $instance;
    }
}