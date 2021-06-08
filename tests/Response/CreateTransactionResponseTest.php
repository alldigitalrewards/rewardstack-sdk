<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Auth\AuthProxy;
use AllDigitalRewards\RewardStack;
use AllDigitalRewards\RewardStack\Participant\AddressRequest;
use AllDigitalRewards\RewardStack\Transaction\CreateTransactionResponse;
use \AllDigitalRewards\RewardStack\Transaction;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class CreateTransactionResponseTest extends TestCase
{
    public function testRequest()
    {
        $jsonData = file_get_contents(__DIR__ . "/../fixtures/create_transaction_response.json");

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

        $createTransactionRequest = new Transaction\CreateTransactionRequest(
            'alldigitalrewards',
            'TESTPARTICIPANT1',
            [
                [
                    "sku" => "HRA01",
                    "quantity" => 1,
                    "amount" => 12
                ]
            ],
            $this->getAddressRequest()
        );
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

    private function getAddressRequest()
    {
        $addressRequest = new AddressRequest();
        $addressRequest->setFirstname('Jason');
        $addressRequest->setLastname('Bentle');
        $addressRequest->setAddress1('3539 W. Aire Libre');
        $addressRequest->setCity('Phoenix');
        $addressRequest->setState('AZ');
        $addressRequest->setCountry('US');
        $addressRequest->setZip('85053');
        return $addressRequest;
    }
}
