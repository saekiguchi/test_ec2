<?php

namespace ContainerXhVx8uS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WpZwTgpService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.WpZwTgp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WpZwTgp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'Plugin' => ['privates', '.errored..service_locator.WpZwTgp.Eccube\\Entity\\Plugin', NULL, 'Cannot autowire service ".service_locator.WpZwTgp": it needs an instance of "Eccube\\Entity\\Plugin" but this type has been excluded in "eccube/services.yaml".'],
            'cacheUtil' => ['privates', 'Eccube\\Util\\CacheUtil', 'getCacheUtilService', true],
        ], [
            'Plugin' => 'Eccube\\Entity\\Plugin',
            'cacheUtil' => 'Eccube\\Util\\CacheUtil',
        ]);
    }
}