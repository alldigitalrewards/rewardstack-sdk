<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Auth\AuthProxy;
use AllDigitalRewards\RewardStack;
use AllDigitalRewards\RewardStack\Participant\ParticipantCollectionResponse;
use \AllDigitalRewards\RewardStack\Participant;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class ParticipantCollectionResponseTest extends TestCase
{
    public function testRequest()
    {
        $jsonData = file_get_contents(__DIR__ . "/../fixtures/participant_collection_response.json");

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

        $participantCollectionRequest = new Participant\ParticipantCollectionRequest('alldigitalrewards');
        $response = $client->request($participantCollectionRequest);

        $expectedResponse = new ParticipantCollectionResponse(json_decode($jsonData));

        $this->assertInstanceOf(
            ParticipantCollectionResponse::class,
            $response
        );

        $this->assertEquals(
            $expectedResponse->count(),
            $response->count()
        );

        $this->assertEquals(
            $expectedResponse->getItem(1)->getEmailAddress(),
            $response->getItem(1)->getEmailAddress()
        );

        $this->assertEquals(
            $expectedResponse->getItem(2)->getUniqueId(),
            $response->getItem(2)->getUniqueId()
        );
        $this->assertEquals(
            $expectedResponse->getItem(3)->getCredit(),
            $response->getItem(3)->getCredit()
        );
        $this->assertEquals(
            $expectedResponse->getItem(4)->getFirstname(),
            $response->getItem(4)->getFirstname()
        );

        $this->assertEquals(
            $expectedResponse->getItem(5)->getLastname(),
            $response->getItem(5)->getLastname()
        );

        $this->assertEquals(
            $expectedResponse->getItem(6)->getPhone(),
            $response->getItem(6)->getPhone()
        );

        $this->assertEquals(
            $expectedResponse->getItem(7)->getActive(),
            $response->getItem(7)->getActive()
        );
        $this->assertEquals(
            $expectedResponse->getItem(8)->getCreatedAt(),
            $response->getItem(8)->getCreatedAt()
        );
        $this->assertEquals(
            $expectedResponse->getItem(9)->getUpdatedAt(),
            $response->getItem(9)->getUpdatedAt()
        );
        $this->assertEquals(
            $expectedResponse->getItem(10)->getAddress(),
            $response->getItem(10)->getAddress()
        );
        $this->assertEquals(
            $expectedResponse->getItem(11)->getProgram(),
            $response->getItem(11)->getProgram()
        );
        $this->assertEquals(
            $expectedResponse->getItem(12)->getOrganization(),
            $response->getItem(12)->getOrganization()
        );
    }
}
