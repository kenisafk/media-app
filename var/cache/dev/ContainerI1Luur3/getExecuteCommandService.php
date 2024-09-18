<?php

namespace ContainerI1Luur3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExecuteCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Dukecity\CommandSchedulerBundle\Command\ExecuteCommand' shared autowired service.
     *
     * @return \Dukecity\CommandSchedulerBundle\Command\ExecuteCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LockableTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/dukecity/command-scheduler-bundle/Command/ExecuteCommand.php';

        $container->services['Dukecity\\CommandSchedulerBundle\\Command\\ExecuteCommand'] = $instance = new \Dukecity\CommandSchedulerBundle\Command\ExecuteCommand(($container->services['Dukecity\\CommandSchedulerBundle\\Service\\CommandSchedulerExecution'] ?? $container->load('getCommandSchedulerExecutionService')), ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)), ($container->services['doctrine'] ?? self::getDoctrineService($container)), 'default', (\dirname(__DIR__, 3).'/log'));

        $instance->setName('scheduler:execute');
        $instance->setDescription('Execute scheduled commands');

        return $instance;
    }
}
