<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Auth\AuthProxy;
use AllDigitalRewards\RewardStack;
use AllDigitalRewards\RewardStack\Response\ParticipantCollectionResponse;
use \AllDigitalRewards\RewardStack\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class ParticipantCollectionResponseTest extends TestCase
{
    public function testRequest()
    {
        $jsonData = file_get_contents(__DIR__ . "/../fixtures/participant_collection_response.json");

        $authProxy = $this->createMock(AuthProxy::class);

        $authProxy->method('request')
            ->willReturn(new Response(
                200,
                [],
                $jsonData
            ));

        $client = new RewardStack\Client($authProxy);

        $participantCollectionRequest = new Request\ParticipantCollectionRequest();
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
            $expectedResponse->getItem(7)->getBirthdate(),
            $response->getItem(7)->getBirthdate()
        );
        $this->assertEquals(
            $expectedResponse->getItem(8)->getActive(),
            $response->getItem(8)->getActive()
        );
        $this->assertEquals(
            $expectedResponse->getItem(9)->getCreatedAt(),
            $response->getItem(9)->getCreatedAt()
        );
        $this->assertEquals(
            $expectedResponse->getItem(10)->getUpdatedAt(),
            $response->getItem(10)->getUpdatedAt()
        );
        $this->assertEquals(
            $expectedResponse->getItem(11)->getAddress(),
            $response->getItem(11)->getAddress()
        );
        $this->assertEquals(
            $expectedResponse->getItem(12)->getProgram(),
            $response->getItem(12)->getProgram()
        );
        $this->assertEquals(
            $expectedResponse->getItem(13)->getOrganization(),
            $response->getItem(13)->getOrganization()
        );
        $this->assertEquals(
            $expectedResponse->getItem(14)->getMeta(),
            $response->getItem(14)->getMeta()
        );
    }
}
