<?php

namespace ContainerPpdRZfJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHttpClientService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'http_client' shared service.
     *
     * @return \Symfony\Contracts\HttpClient\HttpClientInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-client-contracts/HttpClientInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-client/HttpClient.php';

        $container->privates['http_client'] = $instance = \Symfony\Component\HttpClient\HttpClient::create([], 6);

        $a = new \Symfony\Bridge\Monolog\Logger('http_client');
        $a->pushProcessor(($container->privates['contao.monolog.processor'] ?? $container->getContao_Monolog_ProcessorService()));
        $a->pushHandler(($container->privates['monolog.handler.console'] ?? $container->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($container->privates['monolog.handler.main'] ?? $container->getMonolog_Handler_MainService()));
        $a->pushHandler(($container->privates['contao.monolog.handler'] ?? $container->getContao_Monolog_HandlerService()));

        $instance->setLogger($a);

        return $instance;
    }
}
