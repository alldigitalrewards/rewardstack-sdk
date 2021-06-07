<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Transaction\SingleUserTransactionRequest;
use AllDigitalRewards\RewardStack\Transaction\SingleUserTransactionResponse;
use PHPUnit\Framework\TestCase;

class SingleUserTransactionRequestTest extends TestCase
{
    protected $program = 'sharecare';
    protected $uniqueId;
    protected $transactionId;
    protected $singleUsertransactionRequest;

    protected function setUp(): void
    {
        $this->uniqueId = uniqid();
        $this->transactionId = '200';
        $this->singleUsertransactionRequest = new SingleUserTransactionRequest(
            $this->program,
            $this->uniqueId,
            $this->transactionId
        );
    }


    public function testGetHttpEndpoint()
    {
        $expectedUrl = "/api/program/$this->program/participant/$this->uniqueId/transaction/$this->transactionId";
        $this->assertEquals($expectedUrl, $this->singleUsertransactionRequest->getHttpEndpoint());
    }

    public function testGetResponseObject()
    {
        $this->assertInstanceOf(
            SingleUserTransactionResponse::class,
            $this->singleUsertransactionRequest->getResponseObject()
        );
    }
}
