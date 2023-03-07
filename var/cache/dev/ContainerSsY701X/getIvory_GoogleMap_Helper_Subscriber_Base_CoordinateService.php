<?php

namespace ContainerSsY701X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIvory_GoogleMap_Helper_Subscriber_Base_CoordinateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ivory.google_map.helper.subscriber.base.coordinate' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Base\CoordinateSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Subscriber'.\DIRECTORY_SEPARATOR.'AbstractSubscriber.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Subscriber'.\DIRECTORY_SEPARATOR.'Base'.\DIRECTORY_SEPARATOR.'CoordinateSubscriber.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Collector'.\DIRECTORY_SEPARATOR.'AbstractCollector.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Collector'.\DIRECTORY_SEPARATOR.'Base'.\DIRECTORY_SEPARATOR.'CoordinateCollector.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Formatter'.\DIRECTORY_SEPARATOR.'Formatter.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Collector'.\DIRECTORY_SEPARATOR.'Overlay'.\DIRECTORY_SEPARATOR.'CircleCollector.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Collector'.\DIRECTORY_SEPARATOR.'Overlay'.\DIRECTORY_SEPARATOR.'MarkerCollector.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Collector'.\DIRECTORY_SEPARATOR.'Overlay'.\DIRECTORY_SEPARATOR.'PolygonCollector.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Collector'.\DIRECTORY_SEPARATOR.'Overlay'.\DIRECTORY_SEPARATOR.'PolylineCollector.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Collector'.\DIRECTORY_SEPARATOR.'Layer'.\DIRECTORY_SEPARATOR.'HeatmapLayerCollector.php';

        return $container->privates['ivory.google_map.helper.subscriber.base.coordinate'] = new \Ivory\GoogleMap\Helper\Subscriber\Base\CoordinateSubscriber(($container->privates['ivory.google_map.helper.formatter'] ?? ($container->privates['ivory.google_map.helper.formatter'] = new \Ivory\GoogleMap\Helper\Formatter\Formatter(true))), new \Ivory\GoogleMap\Helper\Collector\Base\CoordinateCollector(($container->privates['ivory.google_map.helper.collector.base.bound'] ?? $container->load('getIvory_GoogleMap_Helper_Collector_Base_BoundService')), ($container->privates['ivory.google_map.helper.collector.overlay.circle'] ?? ($container->privates['ivory.google_map.helper.collector.overlay.circle'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\CircleCollector())), ($container->privates['ivory.google_map.helper.collector.overlay.info_window'] ?? $container->load('getIvory_GoogleMap_Helper_Collector_Overlay_InfoWindowService')), ($container->privates['ivory.google_map.helper.collector.overlay.marker'] ?? ($container->privates['ivory.google_map.helper.collector.overlay.marker'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\MarkerCollector())), ($container->privates['ivory.google_map.helper.collector.overlay.polygon'] ?? ($container->privates['ivory.google_map.helper.collector.overlay.polygon'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\PolygonCollector())), ($container->privates['ivory.google_map.helper.collector.overlay.polyline'] ?? ($container->privates['ivory.google_map.helper.collector.overlay.polyline'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\PolylineCollector())), ($container->privates['ivory.google_map.helper.collector.layer.heatmap'] ?? ($container->privates['ivory.google_map.helper.collector.layer.heatmap'] = new \Ivory\GoogleMap\Helper\Collector\Layer\HeatmapLayerCollector()))), ($container->privates['ivory.google_map.helper.renderer.base.coordinate'] ?? $container->load('getIvory_GoogleMap_Helper_Renderer_Base_CoordinateService')));
    }
}
