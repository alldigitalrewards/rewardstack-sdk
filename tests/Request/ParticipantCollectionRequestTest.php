<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Participant\ParticipantCollectionRequest;
use AllDigitalRewards\RewardStack\Participant\ParticipantCollectionResponse;
use PHPUnit\Framework\TestCase;

class ParticipantCollectionRequestTest extends TestCase
{
    protected $program = 'sharecare';
    protected $participantCollectionRequest;

    protected function setUp(): void
    {
        $this->participantCollectionRequest = new ParticipantCollectionRequest($this->program);
    }

    public function testGetHttpEndpoint()
    {
        $expectedUrl = "/api/program/$this->program/participant";
        $this->assertEquals($expectedUrl, $this->participantCollectionRequest->getHttpEndpoint());
    }

    public function testGetResponseObject()
    {
        $this->assertInstanceOf(
            ParticipantCollectionResponse::class,
            $this->participantCollectionRequest->getResponseObject()
        );
    }
}
