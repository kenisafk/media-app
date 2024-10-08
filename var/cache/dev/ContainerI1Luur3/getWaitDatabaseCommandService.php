<?php

namespace ContainerI1Luur3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWaitDatabaseCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\WaitDatabaseCommand' shared autowired service.
     *
     * @return \App\Command\WaitDatabaseCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/WaitDatabaseCommand.php';

        $container->privates['App\\Command\\WaitDatabaseCommand'] = $instance = new \App\Command\WaitDatabaseCommand(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));

        $instance->setName('db:wait');
        $instance->setDescription('Waits for database availability.');

        return $instance;
    }
}
