<?php

namespace Grizzlylab\Bundle\AuthyBundle\Wrapper;

use Authy\AuthyApi;

/**
 * class AuthyApiWrapper.
 *
 * @author Jean-Louis Pirson <jl.pirson@grizzlylab.be>
 */
class AuthyApiWrapper extends AuthyApi
{
    /**
     * {@inheritdoc}
     */
    public function __construct(string $apiKey, ?string $apiUrl = null)
    {
        if (null == $apiUrl) {
            parent::__construct($apiKey);
        } else {
            parent::__construct($apiKey, $apiUrl);
        }
    }
}
