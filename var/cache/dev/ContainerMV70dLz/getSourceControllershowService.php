<?php

namespace ContainerMV70dLz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSourceControllershowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kIy_58K.App\Controller\SourceController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kIy_58K.App\\Controller\\SourceController::show()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'source' => ['privates', '.errored..service_locator.kIy_58K.App\\Entity\\Source', NULL, 'Cannot autowire service ".service_locator.kIy_58K": it needs an instance of "App\\Entity\\Source" but this type has been excluded in "config/services.yaml".'],
        ], [
            'source' => 'App\\Entity\\Source',
        ]))->withContext('App\\Controller\\SourceController::show()', $container);
    }
}
