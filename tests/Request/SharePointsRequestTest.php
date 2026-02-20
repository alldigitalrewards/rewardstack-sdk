<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Share;
use PHPUnit\Framework\TestCase;

class SharePointsRequestTest extends TestCase
{
    protected $programId = 'test-program';
    protected $sharerUniqueId;
    protected $recipientEmail;
    protected $amount;
    protected $sharePointsRequest;

    protected function setup(): void
    {
        $this->sharerUniqueId = 'sharer-' . uniqid();
        $this->recipientEmail = 'recipient@test.com';
        $this->amount = 100.50;

        $this->sharePointsRequest = new Share\SharePointsRequest(
            $this->programId,
            $this->sharerUniqueId,
            $this->recipientEmail,
            $this->amount
        );
    }

    public function testGetHttpEndpoint()
    {
        $expectedUrl = '/api/program/' . $this->programId . '/participant/' . $this->sharerUniqueId . '/share';
        $this->assertEquals($expectedUrl, $this->sharePointsRequest->getHttpEndpoint());
    }

    public function testGetResponseObject()
    {
        $this->assertInstanceOf(
            Share\SharePointsResponse::class,
            $this->sharePointsRequest->getResponseObject()
        );
    }

    public function testJsonSerialize()
    {
        $expectedArray = [
            'recipient_email' => $this->recipientEmail,
            'amount' => $this->amount,
        ];

        $this->assertEquals(
            $expectedArray,
            $this->sharePointsRequest->jsonSerialize()
        );
    }
}
