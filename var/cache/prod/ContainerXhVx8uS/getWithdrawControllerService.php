<?php

namespace ContainerXhVx8uS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWithdrawControllerService extends Eccube_KernelProdContainer
{
    /*
     * Gets the public 'Eccube\Controller\Mypage\WithdrawController' shared autowired service.
     *
     * @return \Eccube\Controller\Mypage\WithdrawController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/Mypage/WithdrawController.php';

        $container->services['Eccube\\Controller\\Mypage\\WithdrawController'] = $instance = new \Eccube\Controller\Mypage\WithdrawController(($container->privates['Eccube\\Service\\MailService'] ?? $container->load('getMailServiceService')), ($container->privates['Eccube\\Repository\\Master\\CustomerStatusRepository'] ?? $container->load('getCustomerStatusRepositoryService')), ($container->privates['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), ($container->privates['Eccube\\Service\\CartService'] ?? self::getCartServiceService($container)), ($container->privates['Eccube\\Service\\OrderHelper'] ?? $container->load('getOrderHelperService')), ($container->privates['Eccube\\Repository\\PageRepository'] ?? self::getPageRepositoryService($container)));

        $instance->setEccubeConfig(($container->services['Eccube\\Common\\EccubeConfig'] ?? self::getEccubeConfigService($container)));
        $instance->setEntityManager(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));
        $instance->setTranslator(($container->services['translator'] ?? self::getTranslatorService($container)));
        $instance->setSession(($container->privates['Eccube\\Session\\Session'] ?? self::getSessionService($container)));
        $instance->setFormFactory(($container->privates['form.factory'] ?? $container->load('getForm_FactoryService')));
        $instance->setEventDispatcher(($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)));
        $instance->setRouter(($container->services['router'] ?? self::getRouterService($container)));
        $instance->setContainer(($container->privates['.service_locator.xSlAUEh'] ?? $container->load('get_ServiceLocator_XSlAUEhService'))->withContext('Eccube\\Controller\\Mypage\\WithdrawController', $container));

        return $instance;
    }
}