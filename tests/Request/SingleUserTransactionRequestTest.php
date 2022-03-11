<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Common\Entity\Transaction;
use AllDigitalRewards\RewardStack\Transaction\TransactionSingleRequest;
use PHPUnit\Framework\TestCase;

class SingleUserTransactionRequestTest extends TestCase
{
    protected $program = 'alldigitalrewards';
    protected $uniqueId;
    protected $transactionId;
    protected $singleUsertransactionRequest;

    protected function setUp(): void
    {
        $this->uniqueId = uniqid();
        $this->transactionId = '200';
        $this->singleUsertransactionRequest = new TransactionSingleRequest(
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
            Transaction::class,
            $this->singleUsertransactionRequest->getResponseObject()
        );
    }
}
