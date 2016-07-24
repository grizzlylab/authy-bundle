<?php

namespace Grizzlylab\Bundle\AuthyBundle\Service;

use Authy\AuthyApi;

/**
 * class AuthyService
 * @author Jean-Louis Pirson <jl.pirson@grizzlylab.be>
 */
class AuthyService extends AuthyApi
{
    private $authyConfig = array();

    /**
     * {@inheritdoc}
     */
    public function __construct(array $authyConfig)
    {
        $this->authyConfig = $authyConfig;

        if (isset($authyConfig['api_url'])) {
            parent::__construct($authyConfig['api_key'], $authyConfig['api_url']);
        } else {
            parent::__construct($authyConfig['api_key']);
        }
    }
}
