<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Auth\AuthProxy;
use AllDigitalRewards\RewardStack;
use AllDigitalRewards\RewardStack\Program\CreateProgramResponse;
use \AllDigitalRewards\RewardStack\Program;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class CreateProgramResponseTest extends TestCase
{
    public function testRequest()
    {
        $jsonData = file_get_contents(__DIR__ . "/../fixtures/create_program_reponse.json");

        $authProxy = $this->createMock(AuthProxy::class);

        $authProxy->method('request')
            ->willReturn(new Response(
                200,
                [],
                $jsonData
            ));

        $client = new RewardStack\Client($authProxy);

        $createPrograqmRequest = new Program\CreateProgramRequest(
            'sharecare',
            'ABC1234567',
            'A super cool name2',
            '1000',
            '902109021',
            'sharecare-demo.mydigitalrewards.com',
            '24',
            'testlogo'
        );
        $response = $client->request($createPrograqmRequest);

        $expectedResponse = new CreateProgramResponse(json_decode($jsonData));

        $this->assertInstanceOf(
            CreateProgramResponse::class,
            $response
        );

        $this->assertEquals(
            $expectedResponse->getUniqueId(),
            $response->getUniqueId()
        );

        $this->assertEquals(
            $expectedResponse->getMeta(),
            $response->getMeta()
        );

        $this->assertEquals(
            $expectedResponse->getName(),
            $response->getName()
        );

        $this->assertEquals(
            $expectedResponse->getPoint(),
            $response->getPoint()
        );

        $this->assertEquals(
            $expectedResponse->getUrl(),
            $response->getUrl()
        );

        $this->assertEquals(
            $expectedResponse->getLogo(),
            $response->getLogo()
        );

        $this->assertEquals(
            $expectedResponse->getPublished(),
            $response->getPublished()
        );

        $this->assertEquals(
            $expectedResponse->getCostCenterId(),
            $response->getCostCenterId()
        );

        $this->assertEquals(
            $expectedResponse->getActive(),
            $response->getActive()
        );

        $this->assertEquals(
            $expectedResponse->getLogo(),
            $response->getLogo()
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
            $expectedResponse->getOrganization(),
            $response->getOrganization()
        );

        $this->assertEquals(
            $expectedResponse->getContact(),
            $response->getContact()
        );
        $this->assertEquals(
            $expectedResponse->getProductCriteria(),
            $response->getProductCriteria()
        );
        $this->assertEquals(
            $expectedResponse->getFeaturedProducts(),
            $response->getFeaturedProducts()
        );

        $this->assertEquals(
            $expectedResponse->getAutoRedemption(),
            $response->getAutoRedemption()
        );
    }
}
