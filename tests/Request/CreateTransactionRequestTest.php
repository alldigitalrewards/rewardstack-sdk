<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Participant\AddressRequest;
use AllDigitalRewards\RewardStack\Transaction\CreateTransactionRequest;
use AllDigitalRewards\RewardStack\Transaction\CreateTransactionResponse;
use PHPUnit\Framework\TestCase;

class CreateTransactionRequestTest extends TestCase
{
    protected $program = 'alldigitalrewards';
    protected $uniqueId;
    protected $productArray = [
        [
            "sku" => "HRA01",
            "quantity" => 1,
            "amount" => 10
        ],
        [
            "sku" => "PS0000889497-24",
            "quantity" => 1
        ]
    ];
    protected $createTransactionRequest;

    private function getAddressRequest()
    {
        $addressRequest = new AddressRequest();
        $addressRequest->setFirstname('John');
        $addressRequest->setLastname('Smith');
        $addressRequest->setAddress1('123 Acme St.');
        $addressRequest->setCity('Beverly Hills');
        $addressRequest->setState('CA');
        $addressRequest->setCountry('US');
        $addressRequest->setZip('90210');
        return $addressRequest;
    }

    protected function setup(): void
    {
        $this->uniqueId = uniqid();

        $this->createTransactionRequest = new CreateTransactionRequest(
            $this->program,
            $this->uniqueId,
            $this->productArray,
            $this->getAddressRequest()
        );
        $this->createTransactionRequest->setLang('en');
    }

    public function testGetHttpEndpoint()
    {
        $expectedUrl = "/api/program/$this->program/participant/$this->uniqueId/transaction";
        $this->assertEquals($expectedUrl, $this->createTransactionRequest
            ->getHttpEndpoint());
        $this->assertEquals('lang=en_US', $this->createTransactionRequest
            ->getQueryParams());
    }

    public function testGetResponseObject()
    {
        $this->assertInstanceOf(
            CreateTransactionResponse::class,
            $this
                ->createTransactionRequest
            ->getResponseObject()
        );
    }

    public function testJsonSerialize()
    {
        $expectedArray = [
            "products" => $this->productArray,
            "issue_points" => true,
            "meta" => [],
            "shipping" => $this->getAddressRequest()
        ];
        $this->assertEquals(
            $expectedArray,
            $this->createTransactionRequest->jsonSerialize()
        );
    }
}
