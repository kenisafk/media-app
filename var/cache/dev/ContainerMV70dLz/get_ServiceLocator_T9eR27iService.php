<?php

namespace ContainerMV70dLz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_T9eR27iService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.t9eR27i' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.t9eR27i'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'async_priority_high' => ['privates', 'messenger.transport.async_priority_high', 'getMessenger_Transport_AsyncPriorityHighService', true],
            'async_priority_low' => ['privates', 'messenger.transport.async_priority_low', 'getMessenger_Transport_AsyncPriorityLowService', true],
            'failed' => ['privates', 'messenger.transport.failed', 'getMessenger_Transport_FailedService', true],
            'messenger.transport.async_priority_high' => ['privates', 'messenger.transport.async_priority_high', 'getMessenger_Transport_AsyncPriorityHighService', true],
            'messenger.transport.async_priority_low' => ['privates', 'messenger.transport.async_priority_low', 'getMessenger_Transport_AsyncPriorityLowService', true],
            'messenger.transport.failed' => ['privates', 'messenger.transport.failed', 'getMessenger_Transport_FailedService', true],
        ], [
            'async_priority_high' => '?',
            'async_priority_low' => '?',
            'failed' => '?',
            'messenger.transport.async_priority_high' => '?',
            'messenger.transport.async_priority_low' => '?',
            'messenger.transport.failed' => '?',
        ]);
    }
}
