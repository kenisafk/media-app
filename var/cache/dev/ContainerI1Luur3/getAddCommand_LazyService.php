<?php

namespace ContainerI1Luur3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.Dukecity\CommandSchedulerBundle\Command\AddCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.Dukecity\\CommandSchedulerBundle\\Command\\AddCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('scheduler:add', [], 'Add a scheduled command', false, #[\Closure(name: 'Dukecity\\CommandSchedulerBundle\\Command\\AddCommand')] fn (): \Dukecity\CommandSchedulerBundle\Command\AddCommand => ($container->services['Dukecity\\CommandSchedulerBundle\\Command\\AddCommand'] ?? $container->load('getAddCommandService')));
    }
}
