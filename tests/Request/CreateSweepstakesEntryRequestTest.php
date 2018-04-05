<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Request\CreateSweepstakesEntryRequest;
use AllDigitalRewards\RewardStack\Response\CreateSweepstakesEntryResponse;
use PHPUnit\Framework\TestCase;

class CreateSweepstakesEntryRequestTest extends TestCase
{
    protected $uniqueId;
    protected $entryCount;
    protected $createSweepstakesEntryRequest;

    protected function setup()
    {
        $this->uniqueId = uniqid();
        $this->entryCount = '1';
        $this->createSweepstakesEntryRequest = new CreateSweepstakesEntryRequest($this->uniqueId, $this->entryCount);
    }

    public function testGetHttpEndpoint()
    {
        $expectedUrl = '/api/user/' . $this->uniqueId . '/sweepstake';
        $this->assertEquals($expectedUrl, $this->createSweepstakesEntryRequest
            ->getHttpEndpoint());
    }

    public function testGetResponseObject()
    {
        $this->assertInstanceOf(
            CreateSweepstakesEntryResponse::class,
            $this
                ->createSweepstakesEntryRequest
            ->getResponseObject()
        );
    }

    public function testJsonSerialize()
    {
        $expectedArray = [
            "entryCount" => $this->entryCount
        ];

        $this->assertEquals(
            $expectedArray,
            $this->createSweepstakesEntryRequest->jsonSerialize()
        );
    }
}
