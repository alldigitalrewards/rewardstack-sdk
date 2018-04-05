<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Auth\AuthProxy;
use AllDigitalRewards\RewardStack;
use AllDigitalRewards\RewardStack\Response\CreateAdjustmentResponse;
use \AllDigitalRewards\RewardStack\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class CreateAdjustmentTest extends TestCase
{
    public function testRequest()
    {
        $jsonData = file_get_contents(__DIR__ . "/../fixtures/CreateAdjustment.json");

        $authProxy = $this->createMock(AuthProxy::class);

        $authProxy->method('request')
            ->willReturn(new Response(
                200,
                [],
                $jsonData
            ));

        $client = new RewardStack\Client($authProxy);


        $createAdjustmentRequest = new Request\CreateAdjustmentRequest('TESTPARTICIPANT1', 'credit', '100');
        $response = $client->request($createAdjustmentRequest);

        $expectedResponse = new CreateAdjustmentResponse(json_decode($jsonData));

        $this->assertInstanceOf(
            CreateAdjustmentResponse::class,
            $response
        );


        $this->assertEquals(
            $expectedResponse->getAmount(),
            $response->getAmount()
        );

        $this->assertEquals(
            $expectedResponse->getType(),
            $response->getType()
        );
        $this->assertEquals(
            $expectedResponse->getTransactionId(),
            $response->getTransactionId()
        );
        $this->assertEquals(
            $expectedResponse->getReference(),
            $response->getReference()
        );
        $this->assertEquals(
            $expectedResponse->getDescription(),
            $response->getDescription()
        );
        $this->assertEquals(
            $expectedResponse->getId(),
            $response->getId()
        );
        $this->assertEquals(
            $expectedResponse->getCreatedAt(),
            $response->getCreatedAt()
        );
        $this->assertEquals(
            $expectedResponse->getUpdatedAt(),
            $response->getUpdatedAt()
        );
    }
}
