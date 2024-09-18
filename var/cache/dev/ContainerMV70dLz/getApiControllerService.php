<?php

namespace ContainerMV70dLz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Dukecity\CommandSchedulerBundle\Controller\ApiController' shared autowired service.
     *
     * @return \Dukecity\CommandSchedulerBundle\Controller\ApiController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/dukecity/command-scheduler-bundle/Controller/AbstractBaseController.php';
        include_once \dirname(__DIR__, 4).'/vendor/dukecity/command-scheduler-bundle/Controller/ApiController.php';

        $container->services['Dukecity\\CommandSchedulerBundle\\Controller\\ApiController'] = $instance = new \Dukecity\CommandSchedulerBundle\Controller\ApiController();

        $instance->setManagerRegistry(($container->services['doctrine'] ?? self::getDoctrineService($container)));
        $instance->setManagerName('default');
        $instance->setTranslator(($container->services['translator'] ?? self::getTranslatorService($container)));
        $instance->setLockTimeout(false);
        $instance->setLogger(($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)));
        $instance->setCommandParser(($container->services['Dukecity\\CommandSchedulerBundle\\Service\\CommandParser'] ?? $container->load('getCommandParserService')));
        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('Dukecity\\CommandSchedulerBundle\\Controller\\ApiController', $container));

        return $instance;
    }
}
