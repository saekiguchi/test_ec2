<?php

namespace ContainerXhVx8uS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchemaServiceService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Service\SchemaService' shared autowired service.
     *
     * @return \Eccube\Service\SchemaService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/SchemaService.php';

        return $container->privates['Eccube\\Service\\SchemaService'] = new \Eccube\Service\SchemaService(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)), ($container->privates['Eccube\\Service\\PluginContext'] ?? $container->load('getPluginContextService')));
    }
}