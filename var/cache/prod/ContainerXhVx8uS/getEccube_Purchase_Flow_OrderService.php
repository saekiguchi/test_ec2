<?php

namespace ContainerXhVx8uS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEccube_Purchase_Flow_OrderService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'eccube.purchase.flow.order' shared service.
     *
     * @return \Eccube\Service\PurchaseFlow\PurchaseFlow
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/PurchaseFlow.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ValidatorTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ItemHolderValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/PurchaseProcessor.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/StockDiffProcessor.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/PointDiffProcessor.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ItemHolderPostValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/PaymentTotalNegativeValidator.php';

        $container->privates['eccube.purchase.flow.order'] = $instance = new \Eccube\Service\PurchaseFlow\PurchaseFlow();

        $a = ($container->privates['Eccube\\Repository\\ProductClassRepository'] ?? self::getProductClassRepositoryService($container));
        $b = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));
        $c = ($container->privates['Eccube\\Service\\PointHelper'] ?? $container->load('getPointHelperService'));

        $instance->setFlowType('order');
        $instance->addItemHolderPreprocessor(($container->privates['eccube.purchase.flow.item.holder.preprocessor.tax.processor.before'] ?? $container->load('getEccube_Purchase_Flow_Item_Holder_Preprocessor_Tax_Processor_BeforeService')));
        $instance->addItemHolderValidator(new \Eccube\Service\PurchaseFlow\Processor\StockDiffProcessor($a));
        $instance->addItemHolderValidator(new \Eccube\Service\PurchaseFlow\Processor\PointDiffProcessor($b, $c));
        $instance->addItemHolderPostValidator(($container->privates['eccube.purchase.flow.item.holder.post.validator.add.point.validator'] ?? $container->load('getEccube_Purchase_Flow_Item_Holder_Post_Validator_Add_Point_ValidatorService')));
        $instance->addItemHolderPostValidator(($container->privates['eccube.purchase.flow.item.holder.post.validator.payment.total.limit.validator'] ?? $container->load('getEccube_Purchase_Flow_Item_Holder_Post_Validator_Payment_Total_Limit_ValidatorService')));
        $instance->addItemHolderPostValidator(($container->privates['eccube.purchase.flow.item.holder.post.validator.total.negative.validator'] ??= new \Eccube\Service\PurchaseFlow\Processor\PaymentTotalNegativeValidator()));
        $instance->addDiscountProcessor(($container->privates['eccube.purchase.flow.discount.processor.point.processor'] ?? $container->load('getEccube_Purchase_Flow_Discount_Processor_Point_ProcessorService')));
        $instance->addPurchaseProcessor(new \Eccube\Service\PurchaseFlow\Processor\StockDiffProcessor($a));
        $instance->addPurchaseProcessor(new \Eccube\Service\PurchaseFlow\Processor\PointDiffProcessor($b, $c));

        return $instance;
    }
}