<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Auth\AuthProxy;
use AllDigitalRewards\RewardStack;
use AllDigitalRewards\RewardStack\Program\ProgramRetrieveResponse;
use \AllDigitalRewards\RewardStack\Program;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class ProgramRetrieveResponseTest extends TestCase
{
    public function testRequest()
    {
        $jsonData = file_get_contents(__DIR__ . "/../fixtures/program_retrieve_response.json");

        $authProxy = $this->createMock(AuthProxy::class);

        $authProxy->method('request')
            ->willReturn(new Response(
                200,
                [],
                $jsonData
            ));

        $client = new RewardStack\Client($authProxy);

        $progromRetrieveRequest = new Program\ProgramRetrieveRequest();
        $response = $client->request($progromRetrieveRequest);

        $expectedResponse = new ProgramRetrieveResponse(json_decode($jsonData));

        $this->assertInstanceOf(
            ProgramRetrieveResponse::class,
            $response
        );

        $this->assertEquals(
            $expectedResponse->count(),
            $response->count()
        );

        $this->assertEquals(
            $expectedResponse->getItem(1)->getUniqueId(),
            $response->getItem(1)->getUniqueId()
        );

        $this->assertEquals(
            $expectedResponse->getItem(2)->getMeta(),
            $response->getItem(2)->getMeta()
        );

        $this->assertEquals(
            $expectedResponse->getItem(3)->getName(),
            $response->getItem(3)->getName()
        );

        $this->assertEquals(
            $expectedResponse->getItem(4)->getPoint(),
            $response->getItem(4)->getPoint()
        );

        $this->assertEquals(
            $expectedResponse->getItem(5)->getUrl(),
            $response->getItem(5)->getUrl()
        );

        $this->assertEquals(
            $expectedResponse->getItem(6)->getLogo(),
            $response->getItem('5')->getLogo()
        );

        $this->assertEquals(
            $expectedResponse->getItem('5')->getPublished(),
            $response->getItem(6)->getPublished()
        );

        $this->assertEquals(
            $expectedResponse->getItem(7)->getCostCenterId(),
            $response->getItem(7)->getCostCenterId()
        );

        $this->assertEquals(
            $expectedResponse->getItem(8)->getActive(),
            $response->getItem(8)->getActive()
        );

        $this->assertEquals(
            $expectedResponse->getItem(9)->getLogo(),
            $response->getItem(9)->getLogo()
        );

        $this->assertEquals(
            $expectedResponse->getItem(10)->getCreatedAt(),
            $response->getItem(10)->getCreatedAt()
        );

        $this->assertEquals(
            $expectedResponse->getItem(11)->getUpdatedAt(),
            $response->getItem(11)->getUpdatedAt()
        );

        $this->assertEquals(
            $expectedResponse->getItem(12)->getOrganization(),
            $response->getItem(12)->getOrganization()
        );
    }
}
