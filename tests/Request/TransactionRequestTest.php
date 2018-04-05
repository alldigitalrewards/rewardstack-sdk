<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Transaction\TransactionRequest;
use AllDigitalRewards\RewardStack\Transaction\TransactionResponse;
use PHPUnit\Framework\TestCase;

class TransactionRequestTest extends TestCase
{
    protected $uniqueId;
    protected $transactionRequest;

    protected function setUp()
    {
        $this->uniqueId = uniqid();
        $this->transactionRequest = new TransactionRequest($this->uniqueId);
    }

    public function testGetHttpEndpoint()
    {
        $expectedUrl = '/api/user/' . $this->uniqueId. '/transaction';
        $this->assertEquals($expectedUrl, $this->transactionRequest->getHttpEndpoint());
    }

    public function testGetResponseObject()
    {
        $this->assertInstanceOf(
            TransactionResponse::class,
            $this->transactionRequest->getResponseObject()
        );
    }
}
