<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Program\ProgramListRequest;
use AllDigitalRewards\RewardStack\Program\ProgramListResponse;
use PHPUnit\Framework\TestCase;

class ProgramListRequestTest extends TestCase
{
    protected $uniqueId;
    protected $programListRequest;

    protected function setUp(): void
    {
        $this->uniqueId = uniqid();
        $this->programListRequest = new ProgramListRequest($this->uniqueId);
    }

    public function testGetHttpEndpoint()
    {
        $expectedUrl = '/api/program/' . $this->uniqueId;
        $this->assertEquals($expectedUrl, $this->programListRequest->getHttpEndpoint());
    }

    public function testGetResponseObject()
    {
        $this->assertInstanceOf(
            ProgramListResponse::class,
            $this->programListRequest->getResponseObject()
        );
    }
}
