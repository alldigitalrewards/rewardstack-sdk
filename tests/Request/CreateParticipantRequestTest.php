<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Participant\CreateParticipantRequest;
use AllDigitalRewards\RewardStack\Participant\CreateParticipantResponse;
use PHPUnit\Framework\TestCase;

class CreateParticipantRequestTest extends TestCase
{

    protected $program;
    protected $uniqueId;
    protected $firstname;
    protected $lastname;
    protected $email_address;
    protected $createParticipantRequest;

    protected function setup(): void
    {
        $this->program = 'sharecare';
        $this->uniqueId = uniqid();
        $this->firstname = 'John';
        $this->lastname = 'Smith';
        $this->email_address = 'zech+sweepstake1@alldigitalrewards.com';
        $this->createParticipantRequest = new CreateParticipantRequest(
            $this->program,
            $this->uniqueId,
            $this->firstname,
            $this->lastname,
            $this->email_address = 'zech+sweepstake1@alldigitalrewards.com'
        );
    }

    public function testGetHttpEndpoint()
    {

        $expectedUrl = "/api/program/{$this->program}/participant";
        $this->assertEquals($expectedUrl, $this->createParticipantRequest
            ->getHttpEndpoint());
    }

    public function testGetResponseObject()
    {
        $this->assertInstanceOf(
            CreateParticipantResponse::class,
            $this
                ->createParticipantRequest
            ->getResponseObject()
        );
    }

    public function testJsonSerialize()
    {
        $expectedArray = [
            "program" => $this->program,
            "unique_id" => $this->uniqueId,
            "firstname" => $this->firstname,
            "lastname" => $this->lastname,
            "email_address" => $this->email_address,
            "address" => null,
            "birthdate" => null,
            "meta" => null,
        ];

        $this->assertEquals(
            $expectedArray,
            $this->createParticipantRequest->jsonSerialize()
        );
    }
}
