<?php

namespace ContainerI1Luur3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStopSchedulerCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Dukecity\CommandSchedulerBundle\Command\StopSchedulerCommand' shared autowired service.
     *
     * @return \Dukecity\CommandSchedulerBundle\Command\StopSchedulerCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/dukecity/command-scheduler-bundle/Command/StopSchedulerCommand.php';

        $container->services['Dukecity\\CommandSchedulerBundle\\Command\\StopSchedulerCommand'] = $instance = new \Dukecity\CommandSchedulerBundle\Command\StopSchedulerCommand();

        $instance->setName('scheduler:stop');
        $instance->setDescription('Stops command scheduler');

        return $instance;
    }
}
