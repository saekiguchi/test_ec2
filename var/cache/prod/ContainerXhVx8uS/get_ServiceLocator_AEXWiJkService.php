<?php

namespace ContainerXhVx8uS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AEXWiJkService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.AEXWiJk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.AEXWiJk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'security.event_dispatcher.admin' => ['privates', 'security.event_dispatcher.admin', 'getSecurity_EventDispatcher_AdminService', false],
            'security.event_dispatcher.customer' => ['privates', 'security.event_dispatcher.customer', 'getSecurity_EventDispatcher_CustomerService', false],
        ], [
            'event_dispatcher' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.admin' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.customer' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
        ]);
    }
}