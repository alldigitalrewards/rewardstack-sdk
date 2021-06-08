<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Auth\AuthProxy;
use AllDigitalRewards\RewardStack;
use AllDigitalRewards\RewardStack\Sso\SsoTokenResponse;
use \AllDigitalRewards\RewardStack\Sso;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class SsoTokenResponseTest extends TestCase
{
    public function testRequest()
    {
        $jsonData = file_get_contents(__DIR__ . "/../fixtures/sso_token_response.json");

        $uri = new \GuzzleHttp\Psr7\Uri('http://localhost');

        $authProxy = $this->createMock(AuthProxy::class);

        $authProxy->method('getUri')
            ->willReturn($uri);

        $authProxy->method('request')
            ->willReturn(new Response(
                200,
                [],
                $jsonData
            ));

        $client = new RewardStack\Client($authProxy);

        $createSsoRequest = new Sso\SsoTokenRequest('alldigitalrewards','TESTPARTICIPANT1');
        $response = $client->request($createSsoRequest);

        $expectedResponse = new SsoTokenResponse(json_decode($jsonData));

        $this->assertInstanceOf(
            SsoTokenResponse::class,
            $response
        );

        $this->assertEquals(
            $expectedResponse->getToken(),
            $response->getToken()
        );

        $this->assertEquals(
            $expectedResponse->getParticipant(),
            $response->getParticipant()
        );

        $this->assertEquals(
            $expectedResponse->getDomain(),
            $response->getDomain()
        );

        $this->assertEquals(
            $expectedResponse->getExchange(),
            $response->getExchange()
        );
    }
}
