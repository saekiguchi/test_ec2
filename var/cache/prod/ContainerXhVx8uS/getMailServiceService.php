<?php

namespace ContainerXhVx8uS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailServiceService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Service\MailService' shared autowired service.
     *
     * @return \Eccube\Service\MailService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/MailService.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/MailerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Mailer.php';

        $a = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        return $container->privates['Eccube\\Service\\MailService'] = new \Eccube\Service\MailService(new \Symfony\Component\Mailer\Mailer(($container->privates['mailer.transports'] ?? $container->load('getMailer_TransportsService')), NULL, $a), ($container->privates['Eccube\\Repository\\MailTemplateRepository'] ?? $container->load('getMailTemplateRepositoryService')), ($container->privates['Eccube\\Repository\\MailHistoryRepository'] ?? $container->load('getMailHistoryRepositoryService')), ($container->privates['Eccube\\Repository\\BaseInfoRepository'] ?? self::getBaseInfoRepositoryService($container)), $a, ($container->privates['twig'] ?? self::getTwigService($container)), ($container->services['Eccube\\Common\\EccubeConfig'] ?? self::getEccubeConfigService($container)));
    }
}