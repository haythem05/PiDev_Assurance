<?php

namespace ContainerSsY701X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ivory.google_map.helper.subscriber.place.autocomplete' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Subscriber'.\DIRECTORY_SEPARATOR.'AbstractSubscriber.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Subscriber'.\DIRECTORY_SEPARATOR.'Place'.\DIRECTORY_SEPARATOR.'AutocompleteSubscriber.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Formatter'.\DIRECTORY_SEPARATOR.'Formatter.php';

        return $container->privates['ivory.google_map.helper.subscriber.place.autocomplete'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteSubscriber(($container->privates['ivory.google_map.helper.formatter'] ?? ($container->privates['ivory.google_map.helper.formatter'] = new \Ivory\GoogleMap\Helper\Formatter\Formatter(true))), ($container->privates['ivory.google_map.helper.renderer.place.autocomplete'] ?? $container->load('getIvory_GoogleMap_Helper_Renderer_Place_AutocompleteService')));
    }
}
