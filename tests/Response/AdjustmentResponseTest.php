<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Auth\AuthProxy;
use AllDigitalRewards\RewardStack;
use AllDigitalRewards\RewardStack\Adjustment\AdjustmentResponse;
use \AllDigitalRewards\RewardStack\Adjustment;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class AdjustmentResponseTest extends TestCase
{
    public function testRequest()
    {
        $jsonData = file_get_contents(__DIR__ . "/../fixtures/adjustment.json");

        $authProxy = $this->createMock(AuthProxy::class);

        $authProxy->method('request')
            ->willReturn(new Response(
                200,
                [],
                $jsonData
            ));

        $client = new RewardStack\Client($authProxy);

        $adjustmentRequest = new Adjustment\AdjustmentRequest('TESTPARTICIPANT1');
        $response = $client->request($adjustmentRequest);

        $expectedResponse = new AdjustmentResponse(json_decode($jsonData));

        $this->assertInstanceOf(
            AdjustmentResponse::class,
            $response
        );

        $this->assertEquals(
            $expectedResponse->count(),
            $response->count()
        );

        $this->assertEquals(
            $expectedResponse->getItem(1)->getAmount(),
            $response->getItem(1)->getAmount()
        );

        $this->assertEquals(
            $expectedResponse->getItem(2)->getType(),
            $response->getItem(2)->getType()
        );
        $this->assertEquals(
            $expectedResponse->getItem(3)->getTransactionId(),
            $response->getItem(3)->getTransactionId()
        );
        $this->assertEquals(
            $expectedResponse->getItem(4)->getReference(),
            $response->getItem(4)->getReference()
        );

        $this->assertEquals(
            $expectedResponse->getItem(5)->getDescription(),
            $response->getItem(5)->getDescription()
        );

        $this->assertEquals(
            $expectedResponse->getItem(6)->getId(),
            $response->getItem(6)->getId()
        );

        $this->assertEquals(
            $expectedResponse->getItem(7)->getCreatedAt(),
            $response->getItem(7)->getCreatedAt()
        );
        $this->assertEquals(
            $expectedResponse->getItem(8)->getUpdatedAt(),
            $response->getItem(8)->getUpdatedAt()
        );
    }
}
