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

    /**
     * @var CreateTransactionRequest
     */
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

    private function getTransactionRequest(array $transactionConfig)
    {
        $this->uniqueId = uniqid();

        $request = new CreateTransactionRequest(
            $this->program,
            $this->uniqueId,
            $this->productArray,
            $this->getAddressRequest(),
            $transactionConfig
        );
        $request->setLang('en');
        return $request;
    }

    public function testGetHttpEndpoint()
    {
        $transactionRequest = $this->getTransactionRequest([]);
        $expectedUrl = "/api/program/$this->program/participant/$this->uniqueId/transaction";
        $this->assertEquals($expectedUrl, $transactionRequest
            ->getHttpEndpoint());
        $this->assertEquals('lang=en_US', $transactionRequest
            ->getQueryParams());
    }

    public function testGetResponseObject()
    {
        $this->assertInstanceOf(
            CreateTransactionResponse::class,
            $this->getTransactionRequest([])
            ->getResponseObject()
        );
    }

    public function testDefaultTransactionSource()
    {
        $transactionRequest = $this->getTransactionRequest([]);
        $expectedArray = [
            "products" => $this->productArray,
            "issue_points" => true,
            "meta" => [],
            "shipping" => $this->getAddressRequest(),
            'avs_disabled' => false,
            'transaction_source' => 'CLIENT',
        ];
        $this->assertEquals(
            $expectedArray,
            $transactionRequest->jsonSerialize()
        );
    }

    public function testJsonSerialize()
    {
        $transactionRequest = $this->getTransactionRequest(['transaction_source' => 'CLIENT-CAMPAIGN-Y']);
        $expectedArray = [
            "products" => $this->productArray,
            "issue_points" => true,
            "meta" => [],
            "shipping" => $this->getAddressRequest(),
            'avs_disabled' => false,
            'transaction_source' => 'CLIENT-CAMPAIGN-Y',
        ];
        $this->assertEquals(
            $expectedArray,
            $transactionRequest->jsonSerialize()
        );
    }
}
