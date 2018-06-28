<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Auth\AuthProxy;
use AllDigitalRewards\RewardStack;
use AllDigitalRewards\RewardStack\Organization\OrganizationListResponse;
use \AllDigitalRewards\RewardStack\Organization;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class OrganizationListResponseTest extends TestCase
{
    public function testRequest()
    {
        $jsonData = file_get_contents(__DIR__ . "/../fixtures/organization_list_response.json");

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

        $organizationListResponse = new Organization\OrganizationListRequest();
        $response = $client->request($organizationListResponse);

        $expectedResponse = new OrganizationListResponse(json_decode($jsonData));

        $this->assertInstanceOf(
            OrganizationListResponse::class,
            $response
        );

        $this->assertEquals(
            $expectedResponse->count(),
            $response->count()
        );


        $this->assertEquals(
            $expectedResponse->getItem(1)->getName(),
            $response->getItem(1)->getName()
        );

        $this->assertEquals(
            $expectedResponse->getItem(2)->getUniqueId(),
            $response->getItem(2)->getUniqueId()
        );

        $this->assertEquals(
            $expectedResponse->getItem(3)->getAccountsPayableContactReference(),
            $response->getItem(3)->getAccountsPayableContactReference()
        );

        $this->assertEquals(
            $expectedResponse->getItem(4)->getCompanyContactReference(),
            $response->getItem(4)->getCompanyContactReference()
        );

        $this->assertEquals(
            $expectedResponse->getItem(5)->getActive(),
            $response->getItem(5)->getActive()
        );

        $this->assertEquals(
            $expectedResponse->getItem(6)->getCreatedAt(),
            $response->getItem(6)->getCreatedAt()
        );

        $this->assertEquals(
            $expectedResponse->getItem(7)->getUpdatedAt(),
            $response->getItem(7)->getUpdatedAt()
        );
        $this->assertEquals(
            $expectedResponse->getItem(8)->getProgramCount(),
            $response->getItem(8)->getProgramCount()
        );
        $this->assertEquals(
            $expectedResponse->getItem(9)->getParent(),
            $response->getItem(9)->getParent()
        );
    }
}
