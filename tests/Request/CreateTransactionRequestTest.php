<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Request\CreateTransactionRequest;
use AllDigitalRewards\RewardStack\Response\CreateTransactionResponse;
use PHPUnit\Framework\TestCase;

class CreateTransactionRequestTest extends TestCase
{
    protected $uniqueId;
    protected $createTransactionRequest;

    protected function setup()
    {
        $this->uniqueId = uniqid();

        $this->createTransactionRequest = new CreateTransactionRequest($this->uniqueId);
    }

    public function testGetHttpEndpoint()
    {
        $expectedUrl = '/api/user/' . $this->uniqueId . '/transaction';
        $this->assertEquals($expectedUrl, $this->createTransactionRequest
            ->getHttpEndpoint());
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
            "products" => [
                [
                    "sku" => "HRA01",
                    "quantity" => 1,
                    "amount" => 10
                ],
                [
                    "sku" => "PS0000889497-24",
                    "quantity" => 1
                ]
            ],
            "issue_points" => true,
            "meta" => [
                ["hello" => "world2"],
                ["new" => "hello world"]],
            "shipping" => [
                "firstname" => "Zech1",
                "lastname" => "Walden1",
                "address1" => "123 Acme Dr",
                "address2" => "",
                "city" => "Beverly Hills",
                "state" => "CA",
                "zip" => "90210"
            ]
        ];
        $this->assertEquals(
            $expectedArray,
            $this->createTransactionRequest->jsonSerialize()
        );
    }
}
