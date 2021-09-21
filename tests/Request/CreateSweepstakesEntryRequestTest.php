<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Participant\CreateSweepstakesEntryRequest;
use AllDigitalRewards\RewardStack\Participant\CreateSweepstakesEntryResponse;
use PHPUnit\Framework\TestCase;

class CreateSweepstakesEntryRequestTest extends TestCase
{
    protected $program = 'alldigitalrewards';
    protected $uniqueId;
    protected $entryCount;
    protected $createSweepstakesEntryRequest;

    protected function setup()
    {
        $this->uniqueId = uniqid();
        $this->entryCount = '1';
        $this->createSweepstakesEntryRequest = new CreateSweepstakesEntryRequest(
            $this->program,
            $this->uniqueId,
            $this->entryCount
        );
    }

    public function testGetHttpEndpoint()
    {
        $expectedUrl = "/api/program/$this->program/participant/$this->uniqueId/sweepstake";
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
