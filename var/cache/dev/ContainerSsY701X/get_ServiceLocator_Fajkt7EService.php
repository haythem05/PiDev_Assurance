<?php

namespace ContainerSsY701X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Fajkt7EService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fajkt7E' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fajkt7E'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repository' => ['privates', 'App\\Repository\\TypeRepository', 'getTypeRepositoryService', true],
        ], [
            'repository' => 'App\\Repository\\TypeRepository',
        ]);
    }
}