<?php

namespace ContainerSsY701X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIvory_GoogleMap_Helper_Subscriber_Layer_HeatmapService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ivory.google_map.helper.subscriber.layer.heatmap' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Layer\HeatmapLayerSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Subscriber'.\DIRECTORY_SEPARATOR.'AbstractSubscriber.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Subscriber'.\DIRECTORY_SEPARATOR.'Layer'.\DIRECTORY_SEPARATOR.'HeatmapLayerSubscriber.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Renderer'.\DIRECTORY_SEPARATOR.'AbstractRenderer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Renderer'.\DIRECTORY_SEPARATOR.'AbstractJsonRenderer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Renderer'.\DIRECTORY_SEPARATOR.'Layer'.\DIRECTORY_SEPARATOR.'HeatmapLayerRenderer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Formatter'.\DIRECTORY_SEPARATOR.'Formatter.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Collector'.\DIRECTORY_SEPARATOR.'AbstractCollector.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Collector'.\DIRECTORY_SEPARATOR.'Layer'.\DIRECTORY_SEPARATOR.'HeatmapLayerCollector.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'json-builder'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'JsonBuilder.php';

        $a = ($container->privates['ivory.google_map.helper.formatter'] ?? ($container->privates['ivory.google_map.helper.formatter'] = new \Ivory\GoogleMap\Helper\Formatter\Formatter(true)));

        return $container->privates['ivory.google_map.helper.subscriber.layer.heatmap'] = new \Ivory\GoogleMap\Helper\Subscriber\Layer\HeatmapLayerSubscriber($a, ($container->privates['ivory.google_map.helper.collector.layer.heatmap'] ?? ($container->privates['ivory.google_map.helper.collector.layer.heatmap'] = new \Ivory\GoogleMap\Helper\Collector\Layer\HeatmapLayerCollector())), new \Ivory\GoogleMap\Helper\Renderer\Layer\HeatmapLayerRenderer($a, ($container->privates['ivory.google_map.helper.json_builder'] ?? ($container->privates['ivory.google_map.helper.json_builder'] = new \Ivory\JsonBuilder\JsonBuilder()))));
    }
}
