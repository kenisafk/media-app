<?php

namespace ContainerMV70dLz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSourceControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WDauLPg.App\Controller\SourceController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WDauLPg.App\\Controller\\SourceController::delete()'] = ($container->privates['.service_locator.WDauLPg'] ?? $container->load('get_ServiceLocator_WDauLPgService'))->withContext('App\\Controller\\SourceController::delete()', $container);
    }
}
