<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Auth\AuthProxy;
use AllDigitalRewards\RewardStack;
use AllDigitalRewards\RewardStack\Participant\CreateParticipantResponse;
use \AllDigitalRewards\RewardStack\Participant;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class CreateParticipantResponseTest extends TestCase
{
    public function testRequest()
    {
        $jsonData = file_get_contents(__DIR__ . "/../fixtures/create_participant_response.json");

        $uri = new \GuzzleHttp\Psr7\Uri('http://localhost');

        $authProxy = $this->createMock(AuthProxy::class);

        $authProxy->method('getUri')
            ->willReturn($uri);

        $authProxy->method('request')
            ->willReturn(new Response(
                200,
                [],
                $jsonData
            ));

        $client = new RewardStack\Client($authProxy);


        $createParticipantRequest = new Participant\CreateParticipantRequest(
            'alldigitalrewards',
            'TESTPARTICIPANT1',
            'John',
            'Smith',
            'zech+sweepstake1@alldigitalrewards.com'
        );
        $response = $client->request($createParticipantRequest);

        $expectedResponse = new CreateParticipantResponse(json_decode($jsonData));

        $this->assertInstanceOf(
            CreateParticipantResponse::class,
            $response
        );


        $this->assertEquals(
            $expectedResponse->getEmailAddress(),
            $response->getEmailAddress()
        );

        $this->assertEquals(
            $expectedResponse->getUniqueId(),
            $response->getUniqueId()
        );
        $this->assertEquals(
            $expectedResponse->getCredit(),
            $response->getCredit()
        );
        $this->assertEquals(
            $expectedResponse->getFirstname(),
            $response->getFirstname()
        );

        $this->assertEquals(
            $expectedResponse->getLastname(),
            $response->getLastname()
        );

        $this->assertEquals(
            $expectedResponse->getPhone(),
            $response->getPhone()
        );
        $this->assertEquals(
            $expectedResponse->getBirthdate(),
            $response->getBirthdate()
        );
        $this->assertEquals(
            $expectedResponse->getActive(),
            $response->getActive()
        );
        $this->assertEquals(
            $expectedResponse->getCreatedAt(),
            $response->getCreatedAt()
        );
        $this->assertEquals(
            $expectedResponse->getUpdatedAt(),
            $response->getUpdatedAt()
        );
        $this->assertEquals(
            $expectedResponse->getAddress(),
            $response->getAddress()
        );
        $this->assertEquals(
            $expectedResponse->getProgram(),
            $response->getProgram()
        );
        $this->assertEquals(
            $expectedResponse->getOrganization(),
            $response->getOrganization()
        );
        $this->assertEquals(
            $expectedResponse->getMeta(),
            $response->getMeta()
        );
    }
}
