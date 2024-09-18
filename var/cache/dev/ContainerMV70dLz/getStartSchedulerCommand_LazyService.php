<?php

namespace ContainerMV70dLz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStartSchedulerCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.Dukecity\CommandSchedulerBundle\Command\StartSchedulerCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.Dukecity\\CommandSchedulerBundle\\Command\\StartSchedulerCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('scheduler:start', [], 'Starts command scheduler', false, #[\Closure(name: 'Dukecity\\CommandSchedulerBundle\\Command\\StartSchedulerCommand')] fn (): \Dukecity\CommandSchedulerBundle\Command\StartSchedulerCommand => ($container->services['Dukecity\\CommandSchedulerBundle\\Command\\StartSchedulerCommand'] ?? $container->load('getStartSchedulerCommandService')));
    }
}
