<?php

namespace ContainerSsY701X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Monolog_Command_ServerLog_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.monolog.command.server_log.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.monolog.command.server_log.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('server:log', [], 'Start a log server that displays logs in real time', false, function () use ($container): \Symfony\Bridge\Monolog\Command\ServerLogCommand {
            return ($container->privates['monolog.command.server_log'] ?? $container->load('getMonolog_Command_ServerLogService'));
        });
    }
}
