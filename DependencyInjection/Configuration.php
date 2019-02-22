<?php

namespace aibianchi\ExactOnlineBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('exact_online');

        $rootNode
            ->children()
                ->scalarNode('baseUrl')->defaultValue('')->end()
                ->scalarNode('apiUrl')->defaultValue('')->end()
                ->scalarNode('authUrl')->defaultValue('')->end()
                ->scalarNode('tokenUrl')->defaultValue('')->end()
                ->scalarNode('redirectUrl')->defaultValue('')->end()
                ->scalarNode('clientId')->defaultValue('')->end()
                ->scalarNode('clientSecret')->defaultValue('')->end()
            ->end()
            ;

        return $treeBuilder;
    }
}