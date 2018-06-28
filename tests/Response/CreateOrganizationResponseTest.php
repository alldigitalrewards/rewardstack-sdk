<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Auth\AuthProxy;
use AllDigitalRewards\RewardStack;
use AllDigitalRewards\RewardStack\Organization\CreateOrganizationResponse;
use \AllDigitalRewards\RewardStack\Organization;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class CreateOrganizationResponseTest extends TestCase
{
    public function testRequest()
    {
        $jsonData = file_get_contents(__DIR__ . "/../fixtures/create_organization_response.json");

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

        $createOrganizationRequest = new Organization\CreateOrganizationRequest(
            'TESTABC1',
            'TestABC #1',
            'Over the Rainbow',
            '1233211230',
            '123 Acme St',
            '',
            'Beverly Hills',
            'CA',
            '90210',
            ''
        );
        $response = $client->request($createOrganizationRequest);

        $expectedResponse = new CreateOrganizationResponse(json_decode($jsonData));

        $this->assertInstanceOf(
            CreateOrganizationResponse::class,
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
