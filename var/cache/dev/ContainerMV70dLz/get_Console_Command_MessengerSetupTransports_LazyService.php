<?php

namespace ContainerMV70dLz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_MessengerSetupTransports_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.messenger_setup_transports.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.console.command.messenger_setup_transports.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('messenger:setup-transports', [], 'Prepare the required infrastructure for the transport', false, #[\Closure(name: 'console.command.messenger_setup_transports', class: 'Symfony\\Component\\Messenger\\Command\\SetupTransportsCommand')] fn (): \Symfony\Component\Messenger\Command\SetupTransportsCommand => ($container->privates['console.command.messenger_setup_transports'] ?? $container->load('getConsole_Command_MessengerSetupTransportsService')));
    }
}
