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
     * Declared here because AuthyApi assigns it without declaring it, which PHP 8.2 deprecates and
     * PHP 9 will reject. The library is abandoned - its last release is a 2021 release candidate -
     * so the fix cannot come from upstream. Same visibility as the properties it does declare.
     *
     * @var array<string, mixed>
     */
    protected $default_options;

    public function __construct(string $apiKey, ?string $apiUrl = null)
    {
        if (null == $apiUrl) {
            parent::__construct($apiKey);
        } else {
            parent::__construct($apiKey, $apiUrl);
        }
    }
}
