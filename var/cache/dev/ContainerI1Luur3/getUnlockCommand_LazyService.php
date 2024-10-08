<?php

namespace ContainerI1Luur3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUnlockCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.Dukecity\CommandSchedulerBundle\Command\UnlockCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.Dukecity\\CommandSchedulerBundle\\Command\\UnlockCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('scheduler:unlock', [], 'Unlock one or all scheduled commands that have surpassed the lock timeout.', false, #[\Closure(name: 'Dukecity\\CommandSchedulerBundle\\Command\\UnlockCommand')] fn (): \Dukecity\CommandSchedulerBundle\Command\UnlockCommand => ($container->services['Dukecity\\CommandSchedulerBundle\\Command\\UnlockCommand'] ?? $container->load('getUnlockCommandService')));
    }
}
