<?php

namespace ContainerXhVx8uS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEditControllerService extends Eccube_KernelProdContainer
{
    /*
     * Gets the public 'Eccube\Controller\Admin\Order\EditController' shared autowired service.
     *
     * @return \Eccube\Controller\Admin\Order\EditController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Order/EditController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ItemHolderPreprocessor.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/OrderNoProcessor.php';

        $a = ($container->privates['Eccube\\Repository\\OrderRepository'] ?? self::getOrderRepositoryService($container));
        $b = ($container->services['Eccube\\Common\\EccubeConfig'] ?? self::getEccubeConfigService($container));

        $container->services['Eccube\\Controller\\Admin\\Order\\EditController'] = $instance = new \Eccube\Controller\Admin\Order\EditController(($container->services['Eccube\\Service\\TaxRuleService'] ?? $container->load('getTaxRuleServiceService')), ($container->privates['Eccube\\Repository\\Master\\DeviceTypeRepository'] ?? self::getDeviceTypeRepositoryService($container)), ($container->privates['Eccube\\Repository\\ProductRepository'] ?? self::getProductRepositoryService($container)), ($container->privates['Eccube\\Repository\\CategoryRepository'] ?? $container->load('getCategoryRepositoryService')), ($container->privates['Eccube\\Repository\\CustomerRepository'] ?? $container->load('getCustomerRepositoryService')), ($container->privates['serializer'] ?? self::getSerializerService($container)), ($container->privates['Eccube\\Repository\\DeliveryRepository'] ?? $container->load('getDeliveryRepositoryService')), ($container->privates['eccube.purchase.flow.order'] ?? $container->load('getEccube_Purchase_Flow_OrderService')), $a, new \Eccube\Service\PurchaseFlow\Processor\OrderNoProcessor($b, $a), ($container->privates['Eccube\\Repository\\Master\\OrderItemTypeRepository'] ?? $container->load('getOrderItemTypeRepositoryService')), ($container->privates['Eccube\\Repository\\Master\\OrderStatusRepository'] ?? $container->load('getOrderStatusRepositoryService')), ($container->privates['Eccube\\Service\\OrderStateMachine'] ?? $container->load('getOrderStateMachineService')), ($container->privates['Eccube\\Service\\OrderHelper'] ?? $container->load('getOrderHelperService')));

        $instance->setEccubeConfig($b);
        $instance->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));
        $instance->setTranslator(($container->services['translator'] ?? self::getTranslatorService($container)));
        $instance->setSession(($container->privates['Eccube\\Session\\Session'] ?? self::getSessionService($container)));
        $instance->setFormFactory(($container->privates['form.factory'] ?? $container->load('getForm_FactoryService')));
        $instance->setEventDispatcher(($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)));
        $instance->setRouter(($container->services['router'] ?? self::getRouterService($container)));
        $instance->setContainer(($container->privates['.service_locator.xSlAUEh'] ?? $container->load('get_ServiceLocator_XSlAUEhService'))->withContext('Eccube\\Controller\\Admin\\Order\\EditController', $container));

        return $instance;
    }
}