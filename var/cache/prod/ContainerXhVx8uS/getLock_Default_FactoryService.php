<?php

namespace ContainerXhVx8uS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLock_Default_FactoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'lock.default.factory' shared service.
     *
     * @return \Symfony\Component\Lock\LockFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/lock/LockFactory.php';

        $container->privates['lock.default.factory'] = $instance = new \Symfony\Component\Lock\LockFactory(($container->privates['.lock.default.store.2BORioJ'] ?? $container->load('get_Lock_Default_Store_2BORioJService')));

        $a = new \Monolog\Logger('lock');
        $a->pushProcessor(($container->privates['Eccube\\Log\\Processor\\SessionProcessor'] ?? self::getSessionProcessorService($container)));
        $a->pushProcessor(($container->privates['Eccube\\Log\\Processor\\TokenProcessor'] ?? self::getTokenProcessorService($container)));
        $a->pushProcessor(($container->privates['Monolog\\Processor\\UidProcessor'] ??= new \Monolog\Processor\UidProcessor()));
        $a->pushProcessor(($container->privates['Monolog\\Processor\\IntrospectionProcessor'] ??= new \Monolog\Processor\IntrospectionProcessor(100, ['Eccube\\\\Log', 'Psr\\\\Log'])));
        $a->pushProcessor(($container->privates['Symfony\\Bridge\\Monolog\\Processor\\WebProcessor'] ?? self::getWebProcessorService($container)));
        $a->pushHandler(($container->privates['monolog.handler.console'] ?? self::getMonolog_Handler_ConsoleService($container)));
        $a->pushHandler(($container->privates['monolog.handler.main'] ?? self::getMonolog_Handler_MainService($container)));

        $instance->setLogger($a);

        return $instance;
    }
}