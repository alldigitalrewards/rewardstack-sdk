<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Participant\ParticipantPutRequest;
use AllDigitalRewards\RewardStack\Participant\ParticipantResponse;
use PHPUnit\Framework\TestCase;

class ParticipantRetrieveRequestTest extends TestCase
{
    protected $program = 'alldigitalrewards';
    protected $uniqueId;
    protected $participantRequest;

    protected function setUp(): void
    {
        $this->uniqueId = uniqid();
        $this->participantRequest = new ParticipantPutRequest(
            $this->program,
            $this->uniqueId,
            'Joe',
            'Smith',
            'anyemail.yahoo.com'
        );
    }

    public function testGetHttpEndpoint()
    {
        $expectedUrl = "/api/program/$this->program/participant/$this->uniqueId";
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
