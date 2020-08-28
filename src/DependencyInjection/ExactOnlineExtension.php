<?php

namespace ExactOnlineBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * Author: Jefferson Bianchi / Maxime Lambot
 * Email : jefferson@zangra.com / maxime@zangra.com.
 */
class ExactOnlineExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yaml');

        $restServiceDefintion = $container->getDefinition('exact_online.rest_api');
        $restServiceDefintion->addMethodCall('setConfig', [$config]);

        $xmlServiceDefintion = $container->getDefinition('exact_online.xml_api');
        $xmlServiceDefintion->addMethodCall('setConfig', [$config]);
    }
}
