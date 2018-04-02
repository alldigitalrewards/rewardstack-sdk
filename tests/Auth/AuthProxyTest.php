<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Auth\AuthProxy;
use AllDigitalRewards\RewardStack\Auth\Credentials;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Uri;
use PHPUnit\Framework\TestCase;

class AuthProxyTest extends TestCase
{
    public function testConstruct()
    {
        $credentials = new Credentials('username', 'password');
        $uri = new Uri('http://example.com');
        $httpClient = new Client();

        $authProxy = new AuthProxy($credentials, $uri, $httpClient);

        $this->assertInstanceOf(AuthProxy::class, $authProxy);
    }
}
