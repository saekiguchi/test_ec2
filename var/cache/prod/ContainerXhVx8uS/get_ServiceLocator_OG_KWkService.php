<?php

namespace ContainerXhVx8uS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OG_KWkService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.OG.KWk_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OG.KWk_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'composerApiService' => ['services', 'Eccube\\Service\\Composer\\ComposerApiService', 'getComposerApiServiceService', true],
            'dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
        ], [
            'composerApiService' => 'Eccube\\Service\\Composer\\ComposerApiService',
            'dispatcher' => '?',
        ]);
    }
}