<?php

namespace ContainerMV70dLz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getListCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Dukecity\CommandSchedulerBundle\Command\ListCommand' shared autowired service.
     *
     * @return \Dukecity\CommandSchedulerBundle\Command\ListCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/dukecity/command-scheduler-bundle/Command/ListCommand.php';

        $container->services['Dukecity\\CommandSchedulerBundle\\Command\\ListCommand'] = $instance = new \Dukecity\CommandSchedulerBundle\Command\ListCommand(($container->services['doctrine'] ?? self::getDoctrineService($container)), ($container->privates['time.datetime_formatter'] ?? $container->load('getTime_DatetimeFormatterService')), 'default');

        $instance->setName('scheduler:list');
        $instance->setDescription('List scheduled commands');

        return $instance;
    }
}
