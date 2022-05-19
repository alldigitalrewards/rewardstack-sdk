<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Adjustment;

use PHPUnit\Framework\TestCase;

class CreateAdjustmentRequestTest extends TestCase
{
    protected $program = 'alldigitalrewards';
    protected $uniqueId;
    protected $type;
    protected $amount;
    protected $referenceId;
    protected $description;
    protected $activity;
    protected $completedAt;
    protected $createAdjustmentRequest;

    protected function setup(): void
    {
        $this->uniqueId = uniqid();
        $this->type = 'credit';
        $this->amount = 200;
        $this->referenceId = 'test-reference';
        $this->description = 'a cool description';
        $this->activity = 'cool-activitiy';
        $this->completedAt = (new \DateTime())->format('Y-m-d H:i:s');

        $this->createAdjustmentRequest = new Adjustment\CreateAdjustmentRequest(
            $this->program,
            $this->uniqueId,
            $this->type,
            $this->amount,
            $this->referenceId,
            $this->description,
            $this->activity,
            $this->completedAt,
        );
    }

    public function testGetHttpEndpoint()
    {
        $expectedUrl = '/api/program/'. $this->program . '/participant/' . $this->uniqueId . '/adjustment';
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
            "reference" => $this->referenceId,
            "description" => $this->description,
            "activity" => $this->activity,
            "completed_at" => $this->completedAt,
        ];

        $this->assertEquals(
            $expectedArray,
            $this->createAdjustmentRequest->jsonSerialize()
        );
    }
}
