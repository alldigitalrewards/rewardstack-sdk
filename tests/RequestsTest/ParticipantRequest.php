<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Auth\AuthProxy;
use AllDigitalRewards\RewardStack\Auth\Credentials;
use AllDigitalRewards\RewardStack\Request;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Psr7\Uri;
use PHPUnit\Framework\TestCase;
use GuzzleHttp\HandlerStack;

class ParticipantRequestTest extends TestCase
{
    public function testSuccessfullyReturnedParticipant()
    {
        $participatcollectionResponse = file_get_contents(__DIR__ . '/../fixtures/participant_collection_response.json');

        $mock = new MockHandler([
            new Response(
                200,
                [],
                $participatcollectionResponse
            )
        ]);

        $guzzleClient = new GuzzleClient([
            'handler' => HandlerStack::create($mock),
        ]);

        $credentials = new Credentials('test@alldigitalrewards.com', 'password');
        $uri = new Uri('https://admin.qa.alldigitalrewards.com');

        //$authProxy = new AuthProxy($credentials, $uri, $guzzleClient);

        $authProxy =  $this->getMockBuilder(AuthProxy::class)->disableOriginalConstructor()
            ->getMock()
            ->method('JwtTokenIsValid')
            ->willReturn(true);

        $client = new \AllDigitalRewards\RewardStack\Client($authProxy);
        $participantRequest = new Request\ParticipantRequest('12345');
        $participantResponse = $client->request($participantRequest);
        echo var_dump($participantResponse);
        exit;
        $participantData = json_decode($participatcollectionResponse, true);


        // Assert the properties of the created object based on our fixture.
        // These could be different tests...

        $this->assertSame(
            $participantData['response_data']['email_address'],
            $participantResponse->getEmailAddress()
        );

//        $this->assertSame(
//            $participantData['response_data']['unique_id'],
//            $participantResponse->getUniqueId()
//        );
//
//        $this->assertSame(
//            $participantData['response_data']['credit'],
//            $participantResponse->getCredit()
//        );
//
//        $this->assertSame(
//            $participantData['response_data']['firstname'],
//            $participantResponse->getFirstname()
//        );
//
//
//        $this->assertSame(
//            $participantData['response_data']['lastname'],
//            $participantResponse->getLastname()
//        );
//
//
//        $this->assertSame(
//            $participantData['response_data']['phone'],
//            $participantResponse->getPhone()
//        );
//
//
//        $this->assertSame(
//            $participantData['response_data']['active'],
//            $participantResponse->getActive()
//        );
//
//        $this->assertSame(
//            $participantData['response_data']['created_at'],
//            $participantResponse->getCreatedAt()
//        );
//
//
//        $this->assertSame(
//            $participantData['response_data']['updated_at'],
//            $participantResponse->getUpdatedAt()
//        );
    }
}
