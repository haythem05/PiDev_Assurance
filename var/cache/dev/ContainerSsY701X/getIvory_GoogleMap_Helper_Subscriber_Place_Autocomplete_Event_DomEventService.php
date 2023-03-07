<?php

namespace ContainerSsY701X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_DomEventService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteDomEventSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Subscriber'.\DIRECTORY_SEPARATOR.'AbstractSubscriber.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Subscriber'.\DIRECTORY_SEPARATOR.'Place'.\DIRECTORY_SEPARATOR.'Event'.\DIRECTORY_SEPARATOR.'AutocompleteDomEventSubscriber.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Collector'.\DIRECTORY_SEPARATOR.'AbstractCollector.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Collector'.\DIRECTORY_SEPARATOR.'Place'.\DIRECTORY_SEPARATOR.'Event'.\DIRECTORY_SEPARATOR.'AutocompleteDomEventCollector.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Formatter'.\DIRECTORY_SEPARATOR.'Formatter.php';

        return $container->privates['ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteDomEventSubscriber(($container->privates['ivory.google_map.helper.formatter'] ?? ($container->privates['ivory.google_map.helper.formatter'] = new \Ivory\GoogleMap\Helper\Formatter\Formatter(true))), new \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteDomEventCollector(), ($container->privates['ivory.google_map.helper.renderer.event.dom_event'] ?? $container->load('getIvory_GoogleMap_Helper_Renderer_Event_DomEventService')));
    }
}