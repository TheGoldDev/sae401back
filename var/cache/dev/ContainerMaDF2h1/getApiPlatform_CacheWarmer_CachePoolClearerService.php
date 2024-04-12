<?php

namespace ContainerMaDF2h1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_CacheWarmer_CachePoolClearerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.cache_warmer.cache_pool_clearer' shared service.
     *
     * @return \ApiPlatform\Symfony\Bundle\CacheWarmer\CachePoolClearerCacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Symfony/Bundle/CacheWarmer/CachePoolClearerCacheWarmer.php';

        return $container->privates['api_platform.cache_warmer.cache_pool_clearer'] = new \ApiPlatform\Symfony\Bundle\CacheWarmer\CachePoolClearerCacheWarmer(($container->services['cache.system_clearer'] ?? $container->load('getCache_SystemClearerService')), [0 => 'api_platform.cache.metadata.property', 1 => 'api_platform.cache.metadata.resource', 2 => 'api_platform.cache.metadata.resource_collection', 3 => 'api_platform.cache.route_name_resolver', 4 => 'api_platform.cache.identifiers_extractor', 5 => 'api_platform.elasticsearch.cache.metadata.document']);
    }
}
