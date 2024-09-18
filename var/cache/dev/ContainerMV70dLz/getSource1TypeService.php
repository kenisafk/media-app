<?php

namespace ContainerMV70dLz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSource1TypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\Source1Type' shared autowired service.
     *
     * @return \App\Form\Source1Type
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Source1Type.php';

        return $container->privates['App\\Form\\Source1Type'] = new \App\Form\Source1Type();
    }
}
