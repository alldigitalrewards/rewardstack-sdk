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
            "shareable" => false,
        ];

        $this->assertEquals(
            $expectedArray,
            $this->createAdjustmentRequest->jsonSerialize()
        );
    }

    public function testJsonSerializeWithShareableTrue()
    {
        $shareableRequest = new Adjustment\CreateAdjustmentRequest(
            $this->program,
            $this->uniqueId,
            $this->type,
            $this->amount,
            $this->referenceId,
            $this->description,
            $this->activity,
            $this->completedAt,
            true // shareable
        );

        $serialized = $shareableRequest->jsonSerialize();

        $expectedArray = [
            "type" => $this->type,
            "amount" => $this->amount,
            "reference" => $this->referenceId,
            "description" => $this->description,
            "activity" => $this->activity,
            "completed_at" => $this->completedAt,
            "shareable" => true,
        ];

        $this->assertEquals($expectedArray, $serialized);
        // Must be a genuine JSON boolean, not 1/"true" — see ADR-0002 coercion trap.
        $this->assertArrayHasKey('shareable', $serialized);
        $this->assertSame(true, $serialized['shareable']);
    }

    public function testJsonSerializeDefaultsShareableToFalse()
    {
        // shareable is always present and defaults to a genuine boolean false.
        $serialized = $this->createAdjustmentRequest->jsonSerialize();
        $this->assertArrayHasKey('shareable', $serialized);
        $this->assertSame(false, $serialized['shareable']);
    }

    public function testJsonSerializeKeepsExistingKeysUnchanged()
    {
        // The six pre-existing keys must be untouched by the shareable addition.
        $serialized = $this->createAdjustmentRequest->jsonSerialize();
        $this->assertSame(
            ['type', 'amount', 'reference', 'description', 'activity', 'completed_at', 'shareable'],
            array_keys($serialized)
        );
        $this->assertEquals($this->type, $serialized['type']);
        $this->assertEquals($this->amount, $serialized['amount']);
        $this->assertEquals($this->referenceId, $serialized['reference']);
        $this->assertEquals($this->description, $serialized['description']);
        $this->assertEquals($this->activity, $serialized['activity']);
        $this->assertEquals($this->completedAt, $serialized['completed_at']);
    }
}
