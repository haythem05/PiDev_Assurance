<?php

namespace ContainerSLxJDkE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIvory_GoogleMap_Helper_Collector_Base_BoundService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ivory.google_map.helper.collector.base.bound' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Base\BoundCollector
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Collector'.\DIRECTORY_SEPARATOR.'AbstractCollector.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Collector'.\DIRECTORY_SEPARATOR.'Base'.\DIRECTORY_SEPARATOR.'BoundCollector.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Collector'.\DIRECTORY_SEPARATOR.'Overlay'.\DIRECTORY_SEPARATOR.'GroundOverlayCollector.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Collector'.\DIRECTORY_SEPARATOR.'Overlay'.\DIRECTORY_SEPARATOR.'RectangleCollector.php';

        return $container->privates['ivory.google_map.helper.collector.base.bound'] = new \Ivory\GoogleMap\Helper\Collector\Base\BoundCollector(($container->privates['ivory.google_map.helper.collector.overlay.ground_overlay'] ?? ($container->privates['ivory.google_map.helper.collector.overlay.ground_overlay'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\GroundOverlayCollector())), ($container->privates['ivory.google_map.helper.collector.overlay.rectangle'] ?? ($container->privates['ivory.google_map.helper.collector.overlay.rectangle'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\RectangleCollector())));
    }
}
