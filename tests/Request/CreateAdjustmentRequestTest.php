<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Adjustment;

use PHPUnit\Framework\TestCase;

class CreateAdjustmentRequestTest extends TestCase
{
    protected $uniqueId;
    protected $type;
    protected $amount;
    protected $referenceId;
    protected $createAdjustmentRequest;

    protected function setup(): void
    {
        $this->uniqueId = uniqid();
        $this->type = 'credit';
        $this->amount = 200;
        $this->referenceId = 'test-reference';

        $this->createAdjustmentRequest = new Adjustment\CreateAdjustmentRequest(
            $this->uniqueId,
            $this->type,
            $this->amount,
            $this->referenceId
        );
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
            Adjustment\CreateAdjustmentResponse::class,
            $this
                ->createAdjustmentRequest
            ->getResponseObject()
        );
    }

    public function testJsonSerialize()
    {
        $expectedArray = [
            "type" => $this->type,
            "amount" => $this->amount,
            "reference" => $this->referenceId
        ];

        $this->assertEquals(
            $expectedArray,
            $this->createAdjustmentRequest->jsonSerialize()
        );
    }
}
