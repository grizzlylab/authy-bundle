<?php

namespace Grizzlylab\Bundle\AuthyBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * @package Grizzlylab\Bundle\AuthyBundle\DependencyInjection
 * @author  Jean-Louis Pirson <jl.pirson@grizzlylab.be>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('grizzlylab_authy');
        $rootNode
            ->children()
            ->scalarNode('api_key')->end()
            ->scalarNode('api_url')->defaultValue('null')->end();

        return $treeBuilder;
    }
}
