<?php

namespace ContainerSLxJDkE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIvory_GoogleMap_Helper_Subscriber_MapCenterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ivory.google_map.helper.subscriber.map_center' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapCenterSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Subscriber'.\DIRECTORY_SEPARATOR.'AbstractSubscriber.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Subscriber'.\DIRECTORY_SEPARATOR.'MapCenterSubscriber.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Renderer'.\DIRECTORY_SEPARATOR.'AbstractRenderer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Renderer'.\DIRECTORY_SEPARATOR.'MapCenterRenderer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ivory'.\DIRECTORY_SEPARATOR.'google-map'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'Formatter'.\DIRECTORY_SEPARATOR.'Formatter.php';

        $a = ($container->privates['ivory.google_map.helper.formatter'] ?? ($container->privates['ivory.google_map.helper.formatter'] = new \Ivory\GoogleMap\Helper\Formatter\Formatter(true)));

        return $container->privates['ivory.google_map.helper.subscriber.map_center'] = new \Ivory\GoogleMap\Helper\Subscriber\MapCenterSubscriber($a, new \Ivory\GoogleMap\Helper\Renderer\MapCenterRenderer($a));
    }
}
