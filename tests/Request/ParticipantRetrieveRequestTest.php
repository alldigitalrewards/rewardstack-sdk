<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Participant\ParticipantRetrieveRequest;
use AllDigitalRewards\RewardStack\Participant\ParticipantRetrieveResponse;
use PHPUnit\Framework\TestCase;

class ParticipantRetrieveRequestTest extends TestCase
{
    protected $uniqueId;
    protected $participantRetrieveRequest;

    protected function setUp()
    {
        $this->uniqueId = uniqid();
        $this->participantRetrieveRequest = new ParticipantRetrieveRequest($this->uniqueId);
    }

    public function testGetHttpEndpoint()
    {
        $expectedUrl = '/api/user/' . $this->uniqueId;
        $this->assertEquals($expectedUrl, $this->participantRetrieveRequest->getHttpEndpoint());
    }

    public function testGetResponseObject()
    {
        $this->assertInstanceOf(
            ParticipantRetrieveResponse::class,
            $this->participantRetrieveRequest->getResponseObject()
        );
    }
}
