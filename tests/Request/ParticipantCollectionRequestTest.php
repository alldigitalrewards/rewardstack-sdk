<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Participant\ParticipantCollectionRequest;
use AllDigitalRewards\RewardStack\Participant\ParticipantCollectionResponse;
use PHPUnit\Framework\TestCase;

class ParticipantCollectionRequestTest extends TestCase
{
    protected $participantCollectionRequest;

    protected function setUp(): void
    {
        $this->participantCollectionRequest = new ParticipantCollectionRequest;
    }

    public function testGetHttpEndpoint()
    {
        $expectedUrl = '/api/user';
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
