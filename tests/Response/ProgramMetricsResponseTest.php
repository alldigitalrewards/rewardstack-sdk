<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Auth\AuthProxy;
use AllDigitalRewards\RewardStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class ProgramMetricsResponseTest extends TestCase
{
    public function testRequest()
    {
        $authProxy = $this->createMock(AuthProxy::class);

        $authProxy->method('getUri')
            ->willReturn(
                new \GuzzleHttp\Psr7\Uri('http://localhost')
            );

        $json = file_get_contents(__DIR__ . "/../fixtures/program_metrics_response.json");
        $authProxy->method('request')
            ->willReturn(
                new Response(
                    200,
                    [],
                    $json
                )
            );

        $client = new RewardStack\Client($authProxy);
        $metricsRequest = new RewardStack\Program\MetricsRequest('example_program');
        $metricsResponse = $client->request($metricsRequest);

        $this->assertInstanceOf(
            RewardStack\Program\MetricsResponse::class,
            $metricsResponse
        );

        $expectedResponse = new RewardStack\Program\MetricsResponse(json_decode($json, true));
        $this->assertEquals($expectedResponse->getAdjustmentTotal(), $metricsResponse->getAdjustmentTotal());
        $this->assertEquals($expectedResponse->getParticipantTotal(), $metricsResponse->getParticipantTotal());
        $this->assertEquals($expectedResponse->getTransactionTotal(), $metricsResponse->getTransactionTotal());
    }
}
