<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Auth\AuthProxy;
use AllDigitalRewards\RewardStack;
use AllDigitalRewards\RewardStack\Organization\OrganizationResponse;
use \AllDigitalRewards\RewardStack\Organization;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class OrganizationResponseTest extends TestCase
{
    public function testRequest()
    {
        $jsonData = file_get_contents(__DIR__ . "/../fixtures/organization_response.json");

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

        $organizationRequest = new Organization\OrganizationRequest(
            '14213123',
            'abc123a123',
            'ABC123A123',
            'ABC123A123 Name',
            [
                "alldigitalrewards-1reward-test.com",
                "sharecarerewards1.com"
            ]
        );
        $response = $client->request($organizationRequest);

        $expectedResponse = new OrganizationResponse(json_decode($jsonData));

        $this->assertInstanceOf(
            OrganizationResponse::class,
            $response
        );

        $this->assertEquals(
            $expectedResponse->getUniqueId(),
            $response->getUniqueId()
        );

        $this->assertEquals(
            $expectedResponse->getActive(),
            $response->getActive()
        );

        $this->assertEquals(
            $expectedResponse->getCreatedAt(),
            $response->getCreatedAt()
        );

        $this->assertEquals(
            $expectedResponse->getUpdatedAt(),
            $response->getUpdatedAt()
        );

        $this->assertEquals(
            $expectedResponse->getParent(),
            $response->getParent()
        );

        $this->assertEquals(
            $expectedResponse->getDomains(),
            $response->getDomains()
        );

        $this->assertEquals(
            $expectedResponse->getCompanyContact(),
            $response->getCompanyContact()
        );

        $this->assertEquals(
            $expectedResponse->getAccountsPayableContact(),
            $response->getAccountsPayableContact()
        );
    }
}
