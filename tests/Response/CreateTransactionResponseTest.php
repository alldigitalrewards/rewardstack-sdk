<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Auth\AuthProxy;
use AllDigitalRewards\RewardStack;
use AllDigitalRewards\RewardStack\Response\CreateTransactionResponse;
use \AllDigitalRewards\RewardStack\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class CreateTransactionResponseTest extends TestCase
{
    public function testRequest()
    {
        $jsonData = file_get_contents(__DIR__ . "/../fixtures/CreateTransaction.json");

        $authProxy = $this->createMock(AuthProxy::class);

        $authProxy->method('request')
            ->willReturn(new Response(
                200,
                [],
                $jsonData
            ));

        $client = new RewardStack\Client($authProxy);

        $createTransactionRequest = new Request\CreateTransactionRequest('TESTPARTICIPANT1');
        $response = $client->request($createTransactionRequest);

        $expectedResponse = new CreateTransactionResponse(json_decode($jsonData));

        $this->assertInstanceOf(
            CreateTransactionResponse::class,
            $response
        );

        $this->assertEquals(
            $expectedResponse->getUniqueId(),
            $response->getUniqueId()
        );
        $this->assertEquals(
            $expectedResponse->getWholesale(),
            $response->getWholesale()
        );
        $this->assertEquals(
            $expectedResponse->getSubtotal(),
            $response->getSubtotal()
        );
        $this->assertEquals(
            $expectedResponse->gettotal(),
            $response->gettotal()
        );
        $this->assertEquals(
            $expectedResponse->getEmailAddress(),
            $response->getEmailAddress()
        );
        $this->assertEquals(
            $expectedResponse->getType(),
            $response->getType()
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
        $this->assertEquals(
            $expectedResponse->getPoints(),
            $response->getPoints()
        );
        $this->assertEquals(
            $expectedResponse->getShipping(),
            $response->getShipping()
        );

        $this->assertEquals(
            $expectedResponse->getProducts(),
            $response->getProducts()
        );
        $this->assertEquals(
            $expectedResponse->getUser(),
            $response->getUser()
        );
        $this->assertEquals(
            $expectedResponse->getMeta(),
            $response->getMeta()
        );
    }
}
