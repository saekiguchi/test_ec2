<?php

namespace ContainerXhVx8uS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEccube_Purchase_Flow_Item_Holder_Post_Validator_Payment_ValidatorService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'eccube.purchase.flow.item.holder.post.validator.payment.validator' shared service.
     *
     * @return \Eccube\Service\PurchaseFlow\Processor\PaymentValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ValidatorTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ItemHolderPostValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/PaymentValidator.php';

        return $container->privates['eccube.purchase.flow.item.holder.post.validator.payment.validator'] = new \Eccube\Service\PurchaseFlow\Processor\PaymentValidator(($container->privates['Eccube\\Repository\\DeliveryRepository'] ?? $container->load('getDeliveryRepositoryService')));
    }
}