<?php

namespace ContainerMV70dLz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStartSchedulerCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Dukecity\CommandSchedulerBundle\Command\StartSchedulerCommand' shared autowired service.
     *
     * @return \Dukecity\CommandSchedulerBundle\Command\StartSchedulerCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/dukecity/command-scheduler-bundle/Command/StartSchedulerCommand.php';

        $container->services['Dukecity\\CommandSchedulerBundle\\Command\\StartSchedulerCommand'] = $instance = new \Dukecity\CommandSchedulerBundle\Command\StartSchedulerCommand(($container->services['doctrine'] ?? self::getDoctrineService($container)), 'default');

        $instance->setName('scheduler:start');
        $instance->setDescription('Starts command scheduler');

        return $instance;
    }
}
