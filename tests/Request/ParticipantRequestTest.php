<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Request\ParticipantRequest;
use AllDigitalRewards\RewardStack\Response\ParticipantResponse;
use PHPUnit\Framework\TestCase;

class ParticipantRequestTest extends TestCase
{
    protected $uniqueId;
    protected $participantRequest;

    protected function setUp()
    {
        $this->uniqueId = uniqid();
        $this->participantRequest = new ParticipantRequest($this->uniqueId);
    }

    public function testGetHttpEndpoint()
    {
        $expectedUrl = '/api/user/' . $this->uniqueId;
        $this->assertEquals($expectedUrl, $this->participantRequest->getHttpEndpoint());
    }

    public function testGetResponseObject()
    {
        $this->assertInstanceOf(
            ParticipantResponse::class,
            $this->participantRequest->getResponseObject()
        );
    }
}
