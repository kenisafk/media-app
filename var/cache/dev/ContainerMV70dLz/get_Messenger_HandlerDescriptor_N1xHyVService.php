<?php

namespace ContainerMV70dLz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_N1xHyVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.n_1xHyV' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/RedispatchMessageHandler.php';

        $a = ($container->services['messenger.default_bus'] ?? self::getMessenger_DefaultBusService($container));

        if (isset($container->privates['.messenger.handler_descriptor.n_1xHyV'])) {
            return $container->privates['.messenger.handler_descriptor.n_1xHyV'];
        }

        return $container->privates['.messenger.handler_descriptor.n_1xHyV'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Symfony\Component\Messenger\Handler\RedispatchMessageHandler($a), []);
    }
}
