<?php

namespace Grizzlylab\Bundle\AuthyBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration.
 *
 * @author  Jean-Louis Pirson <jl.pirson@grizzlylab.be>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('grizzlylab_authy');

        /**
         * @var ArrayNodeDefinition
         */
        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
            ->scalarNode('api_key')->end()
            ->scalarNode('api_url')->defaultValue('null')->end()
        ;

        return $treeBuilder;
    }
}
