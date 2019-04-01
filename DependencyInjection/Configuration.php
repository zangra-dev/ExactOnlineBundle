<?php

namespace aibianchi\ExactOnlineBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Author: Jefferson Bianchi
 * Mail  : Jefferson@aibianchi.com
 */
class Configuration implements ConfigurationInterface
{


    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('exact_online');

        $rootNode
            ->children()

                ->arrayNode('Belgium')
                    ->children()
                        ->scalarNode('baseUrl')->defaultValue('')->end()
                        ->scalarNode('apiUrl')->defaultValue('')->end()
                        ->scalarNode('authUrl')->defaultValue('')->end()
                        ->scalarNode('tokenUrl')->defaultValue('')->end()
                        ->scalarNode('redirectUrl')->defaultValue('')->end()
                        ->scalarNode('clientId')->defaultValue('')->end()
                        ->scalarNode('clientSecret')->defaultValue('')->end()
                    ->end()
                ->end()

                ->arrayNode('France')
                   ->children()
                        ->scalarNode('baseUrl')->defaultValue('')->end()
                        ->scalarNode('apiUrl')->defaultValue('')->end()
                        ->scalarNode('authUrl')->defaultValue('')->end()
                        ->scalarNode('tokenUrl')->defaultValue('')->end()
                        ->scalarNode('redirectUrl')->defaultValue('')->end()
                        ->scalarNode('clientId')->defaultValue('')->end()
                        ->scalarNode('clientSecret')->defaultValue('')->end()
                   ->end()
                ->end()

                ->arrayNode('Nerderland')
                    ->children()
                        ->scalarNode('baseUrl')->defaultValue('')->end()
                        ->scalarNode('apiUrl')->defaultValue('')->end()
                        ->scalarNode('authUrl')->defaultValue('')->end()
                        ->scalarNode('tokenUrl')->defaultValue('')->end()
                        ->scalarNode('redirectUrl')->defaultValue('')->end()
                        ->scalarNode('clientId')->defaultValue('')->end()
                        ->scalarNode('clientSecret')->defaultValue('')->end()
                   ->end()
                ->end()

                ->arrayNode('Spain')
                    ->children()
                        ->scalarNode('baseUrl')->defaultValue('')->end()
                        ->scalarNode('apiUrl')->defaultValue('')->end()
                        ->scalarNode('authUrl')->defaultValue('')->end()
                        ->scalarNode('tokenUrl')->defaultValue('')->end()
                        ->scalarNode('redirectUrl')->defaultValue('')->end()
                        ->scalarNode('clientId')->defaultValue('')->end()
                        ->scalarNode('clientSecret')->defaultValue('')->end()
                   ->end()
                ->end()
            ;

        return $treeBuilder;
    }
}