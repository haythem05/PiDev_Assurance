<?php

namespace ContainerSLxJDkE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoBoxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ivory.google_map.helper.subscriber.overlay.info_box' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoBoxSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Subscriber'.\DIRECTORY_SEPARATOR.'AbstractSubscriber.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Subscriber'.\DIRECTORY_SEPARATOR.'Overlay'.\DIRECTORY_SEPARATOR.'AbstractInfoWindowSubscriber.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Subscriber'.\DIRECTORY_SEPARATOR.'Overlay'.\DIRECTORY_SEPARATOR.'InfoBoxSubscriber.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Collector'.\DIRECTORY_SEPARATOR.'AbstractCollector.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Collector'.\DIRECTORY_SEPARATOR.'Overlay'.\DIRECTORY_SEPARATOR.'InfoWindowCollector.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Collector'.\DIRECTORY_SEPARATOR.'Overlay'.\DIRECTORY_SEPARATOR.'InfoBoxCollector.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Renderer'.\DIRECTORY_SEPARATOR.'AbstractRenderer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Renderer'.\DIRECTORY_SEPARATOR.'AbstractJsonRenderer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Renderer'.\DIRECTORY_SEPARATOR.'Overlay'.\DIRECTORY_SEPARATOR.'InfoWindowRendererInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Renderer'.\DIRECTORY_SEPARATOR.'Overlay'.\DIRECTORY_SEPARATOR.'AbstractInfoWindowRenderer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Renderer'.\DIRECTORY_SEPARATOR.'Overlay'.\DIRECTORY_SEPARATOR.'InfoBoxRenderer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Formatter'.\DIRECTORY_SEPARATOR.'Formatter.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Collector'.\DIRECTORY_SEPARATOR.'Overlay'.\DIRECTORY_SEPARATOR.'MarkerCollector.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'json-builder'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'JsonBuilder.php';

        $a = ($container->privates['ivory.google_map.helper.formatter'] ?? ($container->privates['ivory.google_map.helper.formatter'] = new \Ivory\GoogleMap\Helper\Formatter\Formatter(true)));

        return $container->privates['ivory.google_map.helper.subscriber.overlay.info_box'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoBoxSubscriber($a, new \Ivory\GoogleMap\Helper\Collector\Overlay\InfoBoxCollector(($container->privates['ivory.google_map.helper.collector.overlay.marker'] ?? ($container->privates['ivory.google_map.helper.collector.overlay.marker'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\MarkerCollector()))), new \Ivory\GoogleMap\Helper\Renderer\Overlay\InfoBoxRenderer($a, ($container->privates['ivory.google_map.helper.json_builder'] ?? ($container->privates['ivory.google_map.helper.json_builder'] = new \Ivory\JsonBuilder\JsonBuilder())), ($container->privates['ivory.google_map.helper.renderer.utility.requirement'] ?? $container->load('getIvory_GoogleMap_Helper_Renderer_Utility_RequirementService'))));
    }
}
