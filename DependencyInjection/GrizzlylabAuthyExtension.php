<?php

namespace Grizzlylab\Bundle\AuthyBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * Class GrizzlylabAuthyExtension
 * @package Grizzlylab\Bundle\AuthyBundle\DependencyInjection
 * @author  Jean-Louis Pirson <jl.pirson@grizzlylab.be>
 */
class GrizzlylabAuthyExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('grizzlylab_authy_config', $config);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
