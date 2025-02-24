<?php

namespace ContainerJg0BwWq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Fragment_Contao_ContentElement_TemplateService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.fragment._contao.content_element.template' shared service.
     *
     * @return \Contao\CoreBundle\Controller\ContentElement\TemplateController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Fragment/FragmentOptionsAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/AbstractFragmentController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/ContentElement/AbstractContentElementController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/ContentElement/TemplateController.php';

        $container->services['contao.fragment._contao.content_element.template'] = $instance = new \Contao\CoreBundle\Controller\ContentElement\TemplateController();

        $a = $container->load('get_ServiceLocator_GoOfrQe_Contao_Fragment_Contao_ContentElement_TemplateService');

        $instance->setContainer($a);
        $instance->setFragmentOptions(['category' => 'includes', 'type' => 'template', 'debugController' => 'Contao\\CoreBundle\\Controller\\ContentElement\\TemplateController', 'template' => 'ce_template']);
        $instance->setContainer($a);

        return $instance;
    }
}
