<?php

namespace ContainerVI96sLa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Listener_ExceptionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.listener.exception' shared service.
     *
     * @return \ApiPlatform\Symfony\EventListener\ExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Symfony/EventListener/ExceptionListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Util/ContentNegotiationTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Symfony/EventListener/ErrorListener.php';

        $a = ($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService());

        if (isset($container->privates['api_platform.listener.exception'])) {
            return $container->privates['api_platform.listener.exception'];
        }

        return $container->privates['api_platform.listener.exception'] = new \ApiPlatform\Symfony\EventListener\ExceptionListener(new \ApiPlatform\Symfony\EventListener\ErrorListener('api_platform.symfony.main_controller', ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), true, [], $a, $container->parameters['api_platform.error_formats'], $container->parameters['api_platform.exception_to_status'], NULL, ($container->privates['api_platform.resource_class_resolver'] ?? $container->getApiPlatform_ResourceClassResolverService()), NULL, true), false);
    }
}
