<?php

namespace ContainerXhVx8uS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ch9bRtUService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.ch9bRtU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ch9bRtU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'ClassName' => ['privates', '.errored..service_locator.ch9bRtU.Eccube\\Entity\\ClassName', NULL, 'Cannot autowire service ".service_locator.ch9bRtU": it needs an instance of "Eccube\\Entity\\ClassName" but this type has been excluded in "eccube/services.yaml".'],
        ], [
            'ClassName' => 'Eccube\\Entity\\ClassName',
        ]);
    }
}