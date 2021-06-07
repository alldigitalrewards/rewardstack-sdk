<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Auth\AuthProxy;
use AllDigitalRewards\RewardStack;
use AllDigitalRewards\RewardStack\Transaction\SingleUserTransactionResponse;
use \AllDigitalRewards\RewardStack\Transaction;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class SingleUserTransactionResponseTest extends TestCase
{
    public function testRequest()
    {
        $jsonData = file_get_contents(__DIR__ . "/../fixtures/single_user_transaction_response.json");

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

        $singleUserTransactionRequest = new Transaction\SingleUserTransactionRequest('sharecare', 'TESTPARTICIPANT1', '200');
        $response = $client->request($singleUserTransactionRequest);

        $expectedResponse = new SingleUserTransactionResponse(json_decode($jsonData));

        $this->assertInstanceOf(
            SingleUserTransactionResponse::class,
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
