<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Program\ProgramLayoutRequest;
use AllDigitalRewards\RewardStack\Program\ProgramLayoutResponse;
use PHPUnit\Framework\TestCase;

class ProgramLayoutRequestTest extends TestCase
{
    protected $uniqueId;
    protected $programLayoutRequest;

    protected function setUp()
    {
        $this->uniqueId = uniqid();
        $this->programLayoutRequest = new ProgramLayoutRequest($this->uniqueId);
        $this->programLayoutRequest->setLang('en');
    }

    public function testGetHttpEndpoint()
    {
        $expectedUrl = '/api/program/'. $this->uniqueId .'/layout';
        $this->assertEquals($expectedUrl, $this->programLayoutRequest->getHttpEndpoint());
        $this->assertEquals('lang=en_US', $this->programLayoutRequest->getQueryParams());
    }

    public function testGetResponseObject()
    {
        $this->assertInstanceOf(
            ProgramLayoutResponse::class,
            $this->programLayoutRequest->getResponseObject()
        );
    }
}
