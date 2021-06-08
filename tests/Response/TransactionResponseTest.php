<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Auth\AuthProxy;
use AllDigitalRewards\RewardStack;
use AllDigitalRewards\RewardStack\Transaction\TransactionRequest;
use AllDigitalRewards\RewardStack\Transaction\TransactionResponse;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class TransactionResponseTest extends TestCase
{
    public function testRequest()
    {
        $jsonData = file_get_contents(__DIR__ . "/../fixtures/transaction_response.json");

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

        $transactionCollection = new TransactionRequest('alldigitalrewards', 'TESTPARTICIPANT1');
        $response = $client->request($transactionCollection);

        $expectedResponse = new TransactionResponse(json_decode($jsonData));

        $this->assertInstanceOf(
            TransactionResponse::class,
            $response
        );

        $this->assertEquals(
            $expectedResponse->count(),
            $response->count()
        );

        $this->assertEquals(
            $expectedResponse->getItem(1)->getUniqueId(),
            $response->getItem(1)->getUniqueId()
        );
        $this->assertEquals(
            $expectedResponse->getItem(2)->getWholesale(),
            $response->getItem(2)->getWholesale()
        );
        $this->assertEquals(
            $expectedResponse->getItem(3)->getSubtotal(),
            $response->getItem(3)->getSubtotal()
        );
        $this->assertEquals(
            $expectedResponse->getItem(4)->gettotal(),
            $response->getItem(4)->gettotal()
        );
        $this->assertEquals(
            $expectedResponse->getItem(5)->getEmailAddress(),
            $response->getItem(5)->getEmailAddress()
        );
        $this->assertEquals(
            $expectedResponse->getItem(6)->getType(),
            $response->getItem(6)->getType()
        );
        $this->assertEquals(
            $expectedResponse->getItem(7)->getId(),
            $response->getItem(7)->getId()
        );

        $this->assertEquals(
            $expectedResponse->getItem(8)->getCreatedAt(),
            $response->getItem(8)->getCreatedAt()
        );
        $this->assertEquals(
            $expectedResponse->getItem(9)->getUpdatedAt(),
            $response->getItem(9)->getUpdatedAt()
        );
    }
}
