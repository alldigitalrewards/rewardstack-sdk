<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Transaction\TransactionRequest;
use AllDigitalRewards\RewardStack\Transaction\TransactionResponse;
use PHPUnit\Framework\TestCase;

class TransactionRequestTest extends TestCase
{
    protected $program = 'sharecare';
    protected $uniqueId;
    protected $transactionRequest;

    protected function setUp(): void
    {
        $this->uniqueId = uniqid();
        $this->transactionRequest = new TransactionRequest($this->program, $this->uniqueId);
    }

    public function testGetHttpEndpoint()
    {
        $expectedUrl = "/api/program/$this->program/participant/$this->uniqueId/transaction";
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
