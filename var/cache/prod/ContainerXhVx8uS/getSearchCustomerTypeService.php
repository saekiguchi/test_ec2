<?php

namespace ContainerXhVx8uS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchCustomerTypeService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Form\Type\Admin\SearchCustomerType' shared autowired service.
     *
     * @return \Eccube\Form\Type\Admin\SearchCustomerType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Form/Type/Admin/SearchCustomerType.php';

        return $container->privates['Eccube\\Form\\Type\\Admin\\SearchCustomerType'] = new \Eccube\Form\Type\Admin\SearchCustomerType(($container->privates['Eccube\\Repository\\Master\\CustomerStatusRepository'] ?? $container->load('getCustomerStatusRepositoryService')), ($container->services['Eccube\\Common\\EccubeConfig'] ?? self::getEccubeConfigService($container)));
    }
}