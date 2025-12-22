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
    public function load(array $configs, ContainerBuilder $container): void
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        /**
         * @var string|null $apiKey
         */
        $apiKey = $config['api_key'];
        /**
         * @var string|null $apiUrl
         */
        $apiUrl = $config['api_url'];

        $container->setParameter('grizzlylab_authy_api_key', $apiKey);
        $container->setParameter('grizzlylab_authy_api_url', $apiUrl);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
