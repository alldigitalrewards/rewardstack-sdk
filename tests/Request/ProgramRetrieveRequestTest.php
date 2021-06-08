<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Program\ProgramRetrieveRequest;
use AllDigitalRewards\RewardStack\Program\ProgramRetrieveResponse;
use PHPUnit\Framework\TestCase;

class ProgramRetrieveRequestTest extends TestCase
{

    protected $program = 'alldigitalrewards';
    protected $programRetrieveRequest;

    protected function setUp(): void
    {

        $this->programRetrieveRequest = new ProgramRetrieveRequest($this->program);
    }

    public function testGetHttpEndpoint()
    {
        $expectedUrl = '/api/program/' . $this->program ;
        $this->assertEquals($expectedUrl, $this->programRetrieveRequest->getHttpEndpoint());
    }

    public function testGetResponseObject()
    {
        $this->assertInstanceOf(
            ProgramRetrieveResponse::class,
            $this->programRetrieveRequest->getResponseObject()
        );
    }
}
