<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Request\AdjustmentRequest;
use AllDigitalRewards\RewardStack\Response\AdjustmentResponse;
use PHPUnit\Framework\TestCase;

class AdjustmentRequestTest extends TestCase
{
    protected $uniqueId;
    protected $adjustmentRequest;

    protected function setUp()
    {
        $this->uniqueId = uniqid();
        $this->adjustmentRequest = new AdjustmentRequest($this->uniqueId);
    }

    public function testGetHttpEndpoint()
    {
        $expectedUrl = '/api/user/' . $this->uniqueId . '/adjustment';
        $this->assertEquals($expectedUrl, $this->adjustmentRequest->getHttpEndpoint());
    }

    public function testGetResponseObject()
    {
        $this->assertInstanceOf(
            AdjustmentResponse::class,
            $this->adjustmentRequest->getResponseObject()
        );
    }
}
