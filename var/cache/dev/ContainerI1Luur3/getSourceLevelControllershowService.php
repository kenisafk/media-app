<?php

namespace ContainerI1Luur3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSourceLevelControllershowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oR0boeY.App\Controller\SourceLevelController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oR0boeY.App\\Controller\\SourceLevelController::show()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'sourceLevel' => ['privates', '.errored..service_locator.oR0boeY.App\\Entity\\SourceLevel', NULL, 'Cannot autowire service ".service_locator.oR0boeY": it needs an instance of "App\\Entity\\SourceLevel" but this type has been excluded in "config/services.yaml".'],
        ], [
            'sourceLevel' => 'App\\Entity\\SourceLevel',
        ]))->withContext('App\\Controller\\SourceLevelController::show()', $container);
    }
}
