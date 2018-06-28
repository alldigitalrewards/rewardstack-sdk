<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Auth\AuthProxy;
use AllDigitalRewards\RewardStack;
use AllDigitalRewards\RewardStack\Organization\OrganizationDomainsResponse;
use \AllDigitalRewards\RewardStack\Organization;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class OrganizationDomainsResponseTest extends TestCase
{
    public function testRequest()
    {
        $jsonData = file_get_contents(__DIR__ . "/../fixtures/organization_domains_response.json");

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

        $organizationDomainsRequest = new Organization\OrganizationDomainsRequest('14213123');
        $response = $client->request($organizationDomainsRequest);

        $expectedResponse = new OrganizationDomainsResponse(json_decode($jsonData, true));

        $this->assertInstanceOf(
            OrganizationDomainsResponse::class,
            $response
        );

        $this->assertEquals(
            $expectedResponse->count(),
            $response->count()
        );

        $this->assertEquals(
            $expectedResponse->getItem(0)->getId(),
            $response->getItem(0)->getId()
        );

        $this->assertEquals(
            $expectedResponse->getItem(1)->getOrganizationId(),
            $response->getItem(1)->getOrganizationId()
        );
        $this->assertEquals(
            $expectedResponse->getItem(2)->getUrl(),
            $response->getItem(2)->getUrl()
        );

        $this->assertEquals(
            $expectedResponse->getItem(3)->getActive(),
            $response->getItem(3)->getActive()
        );

        $this->assertEquals(
            $expectedResponse->getItem(4)->getUpdatedAt(),
            $response->getItem(4)->getUpdatedAt()
        );

        $this->assertEquals(
            $expectedResponse->getItem(5)->getCreatedAt(),
            $response->getItem(5)->getCreatedAt()
        );
    }
}
