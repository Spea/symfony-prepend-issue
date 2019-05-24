<?php

namespace Bundle\AdvancedBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('advanced');

        $rootNode
            ->children()
                ->integerNode('port')->isRequired()->end()
            ->end();

        return $treeBuilder;
    }
}
