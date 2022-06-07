<?php

namespace ExactOnlineBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Author: Jefferson Bianchi / Maxime Lambot
 * Email : jefferson@zangra.com / maxime@zangra.com.
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('exact_online');
        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
            ->scalarNode('baseUrl')->defaultValue('')->end()
            ->scalarNode('apiUrl')->defaultValue('')->end()
            ->scalarNode('authUrl')->defaultValue('')->end()
            ->scalarNode('tokenUrl')->defaultValue('')->end()
            ->scalarNode('redirectUrl')->defaultValue('')->end()
            ->scalarNode('clientId')->defaultValue('')->end()
            ->scalarNode('clientSecret')->defaultValue('')->end()
            ->scalarNode('mainDivision')->defaultValue('')->end()
            ->scalarNode('webhookSecret')->defaultValue('')->end()
            ->end()
            ;

        return $treeBuilder;
    }
}
