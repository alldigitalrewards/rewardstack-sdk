<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Program\ProgramLayoutRequest;
use AllDigitalRewards\RewardStack\Program\ProgramLayoutResponse;
use PHPUnit\Framework\TestCase;

class ProgramLayoutRequestTest extends TestCase
{
    protected $uniqueId;
    protected $programLayoutRequest;

    protected function setUp(): void
    {
        $this->uniqueId = uniqid();
        $this->programLayoutRequest = new ProgramLayoutRequest($this->uniqueId);
    }

    public function testGetHttpEndpoint()
    {
        $expectedUrl = '/api/program/'. $this->uniqueId .'/layout?lang=en';
        $this->assertEquals($expectedUrl, $this->programLayoutRequest->getHttpEndpoint());
    }

    public function testGetResponseObject()
    {
        $this->assertInstanceOf(
            ProgramLayoutResponse::class,
            $this->programLayoutRequest->getResponseObject()
        );
    }
}
