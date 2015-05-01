<?php

namespace Kamran\PlusAsseticBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\DependencyInjection\Loader;

class KamranPlusAsseticExtension extends Extension
{
    public function getAlias()
    {
        return 'kamran_plus_assetic';
    }

    public function load(array $configs, ContainerBuilder $container)
    {
        echo "I am called.........";
        $processor = new Processor();
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
