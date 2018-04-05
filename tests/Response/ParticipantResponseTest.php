<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Auth\AuthProxy;
use AllDigitalRewards\RewardStack;
use AllDigitalRewards\RewardStack\Participant\ParticipantResponse;
use \AllDigitalRewards\RewardStack\Participant;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class ParticipantResponseTest extends TestCase
{
    public function testRequest()
    {
        $jsonData = file_get_contents(__DIR__ . "/../fixtures/participant_response.json");

        $authProxy = $this->createMock(AuthProxy::class);

        $authProxy->method('request')
            ->willReturn(new Response(
                200,
                [],
                $jsonData
            ));

        $client = new RewardStack\Client($authProxy);

        $participantRequest = new Participant\ParticipantRequest('TESTPARTICIPANT1');
        $response = $client->request($participantRequest);

        $expectedResponse = new ParticipantResponse(json_decode($jsonData));

        $this->assertInstanceOf(
            ParticipantResponse::class,
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
