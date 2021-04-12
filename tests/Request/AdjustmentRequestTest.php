<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Adjustment;
use PHPUnit\Framework\TestCase;

class AdjustmentRequestTest extends TestCase
{
    protected $uniqueId;
    protected $adjustmentRequest;

    protected function setUp(): void
    {
        $this->uniqueId = uniqid();
        $this->adjustmentRequest = new Adjustment\AdjustmentRequest($this->uniqueId);
    }

    public function testGetHttpEndpoint()
    {
        $expectedUrl = '/api/user/' . $this->uniqueId . '/adjustment';
        $this->assertEquals($expectedUrl, $this->adjustmentRequest->getHttpEndpoint());
    }

    public function testGetResponseObject()
    {
        $this->assertInstanceOf(
            Adjustment\AdjustmentResponse::class,
            $this->adjustmentRequest->getResponseObject()
        );
    }
}
