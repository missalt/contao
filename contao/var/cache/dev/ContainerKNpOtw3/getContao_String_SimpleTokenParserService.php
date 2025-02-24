<?php

namespace ContainerKNpOtw3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_String_SimpleTokenParserService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.string.simple_token_parser' shared service.
     *
     * @return \Contao\CoreBundle\String\SimpleTokenParser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/String/SimpleTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/expression-language/ExpressionLanguage.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/String/SimpleTokenExpressionLanguage.php';

        $container->services['contao.string.simple_token_parser'] = $instance = new \Contao\CoreBundle\String\SimpleTokenParser(new \Contao\CoreBundle\String\SimpleTokenExpressionLanguage(NULL, new RewindableGenerator(function () use ($container) {
            return new \EmptyIterator();
        }, 0)));

        $instance->setLogger(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));

        return $instance;
    }
}
