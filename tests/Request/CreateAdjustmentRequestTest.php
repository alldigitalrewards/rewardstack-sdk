<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Request\CreateAdjustmentRequest;
use AllDigitalRewards\RewardStack\Response\CreateAdjustmentResponse;
use PHPUnit\Framework\TestCase;

class CreateAdjustmentRequestTest extends TestCase
{
    protected $uniqueId;
    protected $type;
    protected $amount;
    protected $createAdjustmentRequest;

    protected function setup()
    {
        $this->uniqueId = uniqid();
        $this->type = 'credit';
        $this->amount = 200;
        $this->createAdjustmentRequest = new CreateAdjustmentRequest($this->uniqueId, $this->type, $this->amount);
    }

    public function testGetHttpEndpoint()
    {
        $expectedUrl = '/api/user/' . $this->uniqueId . '/adjustment';
        $this->assertEquals($expectedUrl, $this->createAdjustmentRequest
        ->getHttpEndpoint());
    }

    public function testGetResponseObject()
    {
        $this->assertInstanceOf(
            CreateAdjustmentResponse::class,
            $this
                ->createAdjustmentRequest
            ->getResponseObject()
        );
    }

    public function testJsonSerialize()
    {
        $expectedArray = [
            "type" => $this->type,
            "amount" => $this->amount
        ];

        $this->assertEquals(
            $expectedArray,
            $this->createAdjustmentRequest->jsonSerialize()
        );
    }
}
