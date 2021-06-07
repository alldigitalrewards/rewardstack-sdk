<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Auth\AuthProxy;
use AllDigitalRewards\RewardStack;
use AllDigitalRewards\RewardStack\Program\ProgramListResponse;
use \AllDigitalRewards\RewardStack\Program;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class ProgramListResponseTest extends TestCase
{
    public function testRequest()
    {
        $jsonData = file_get_contents(__DIR__ . "/../fixtures/program_list_response.json");

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

        $progromListRequest = new Program\ProgramListRequest();
        $response = $client->request($progromListRequest);

        $expectedResponse = new ProgramListResponse(json_decode($jsonData));

        $this->assertInstanceOf(
            ProgramListResponse::class,
            $response
        );
        /** @var RewardStack\Common\Entity\ProgramRetrieve $firstResponse */
        $firstResponse = $expectedResponse[0];
        /** @var RewardStack\Common\Entity\ProgramRetrieve $verify */
        $verify = $response[0];
        $this->assertEquals(
            $firstResponse->getUniqueId(),
            $verify->getUniqueId()
        );

        $this->assertEquals(
            $firstResponse->getMeta(),
            $verify->getMeta()
        );

        $this->assertEquals(
            $firstResponse->getName(),
            $verify->getName()
        );

        $this->assertEquals(
            $firstResponse->getPoint(),
            $verify->getPoint()
        );

        $this->assertEquals(
            $firstResponse->getUrl(),
            $verify->getUrl()
        );

        $this->assertEquals(
            $firstResponse->getLogo(),
            $verify->getLogo()
        );

        $this->assertEquals(
            $firstResponse->getPublished(),
            $verify->getPublished()
        );

        $this->assertEquals(
            $firstResponse->getCostCenterId(),
            $verify->getCostCenterId()
        );

        $this->assertEquals(
            $firstResponse->getActive(),
            $verify->getActive()
        );

        $this->assertEquals(
            $firstResponse->getLogo(),
            $verify->getLogo()
        );

        $this->assertEquals(
            $firstResponse->getCreatedAt(),
            $verify->getCreatedAt()
        );

        $this->assertEquals(
            $firstResponse->getUpdatedAt(),
            $verify->getUpdatedAt()
        );

        $this->assertEquals(
            $firstResponse->getOrganization(),
            $verify->getOrganization()
        );
    }
}
