<?php

namespace Grizzlylab\Bundle\AuthyBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * Class GrizzlylabAuthyExtension.
 *
 * @author  Jean-Louis Pirson <jl.pirson@grizzlylab.be>
 */
class GrizzlylabAuthyExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('grizzlylab_authy_api_key', $config['api_key']);
        $container->setParameter('grizzlylab_authy_api_url', $config['api_url']);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
