<?php

namespace ContainerSsY701X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9NOJ1UXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9NOJ1UX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9NOJ1UX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'repo' => ['privates', 'App\\Repository\\TypeRepository', 'getTypeRepositoryService', true],
        ], [
            'normalizer' => '?',
            'repo' => 'App\\Repository\\TypeRepository',
        ]);
    }
}