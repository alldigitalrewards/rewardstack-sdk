<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Participant\ParticipantRetrieveRequest;
use AllDigitalRewards\RewardStack\Participant\ParticipantRetrieveResponse;
use PHPUnit\Framework\TestCase;

class ParticipantRetrieveRequestTest extends TestCase
{
    protected $program = 'alldigitalrewards';
    protected $uniqueId;
    protected $participantRetrieveRequest;

    protected function setUp(): void
    {
        $this->uniqueId = uniqid();
        $this->participantRetrieveRequest = new ParticipantRetrieveRequest(
            $this->program,
            $this->uniqueId
        );
    }

    public function testGetHttpEndpoint()
    {
        $expectedUrl = "/api/program/$this->program/participant/$this->uniqueId";
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
