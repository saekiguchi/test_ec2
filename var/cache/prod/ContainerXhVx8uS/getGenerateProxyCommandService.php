<?php

namespace ContainerXhVx8uS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGenerateProxyCommandService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Command\GenerateProxyCommand' shared autowired service.
     *
     * @return \Eccube\Command\GenerateProxyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Command/GenerateProxyCommand.php';

        $container->privates['Eccube\\Command\\GenerateProxyCommand'] = $instance = new \Eccube\Command\GenerateProxyCommand(($container->privates['Eccube\\Service\\EntityProxyService'] ?? $container->load('getEntityProxyServiceService')), ($container->services['Eccube\\Common\\EccubeConfig'] ?? self::getEccubeConfigService($container)));

        $instance->setName('eccube:generate:proxies');

        return $instance;
    }
}