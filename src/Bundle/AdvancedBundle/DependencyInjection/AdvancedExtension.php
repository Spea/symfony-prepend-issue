<?php

namespace Bundle\AdvancedBundle\DependencyInjection;

use Bundle\AdvancedBundle\TestService;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class AdvancedExtension extends Extension implements PrependExtensionInterface
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $definition = new Definition(TestService::class);
        $definition->addArgument($config['port']);

        $container->setDefinition(TestService::class, $definition);
    }

    public function prepend(ContainerBuilder $container)
    {
        $configs = $container->getExtensionConfig($this->getAlias());
        $configuration = new Configuration();
        $this->processConfiguration($configuration, $configs);
    }
}
