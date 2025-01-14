<?php

namespace ContainerKNpOtw3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_InsertTag_ParserService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.insert_tag.parser' shared service.
     *
     * @return \Contao\CoreBundle\InsertTag\InsertTagParser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/InsertTag/InsertTagParser.php';

        $a = ($container->services['contao.framework'] ?? $container->getContao_FrameworkService());

        if (isset($container->services['contao.insert_tag.parser'])) {
            return $container->services['contao.insert_tag.parser'];
        }

        return $container->services['contao.insert_tag.parser'] = new \Contao\CoreBundle\InsertTag\InsertTagParser($a);
    }
}
