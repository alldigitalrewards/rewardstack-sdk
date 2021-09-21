<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Program\ProgramRequest;
use AllDigitalRewards\RewardStack\Program\ProgramResponse;
use PHPUnit\Framework\TestCase;

class ProgramRequestTest extends TestCase
{

    protected $uniqueId;
    protected $name;
    protected $point;
    protected $phone;
    protected $url;
    protected $active;
    protected $logo;
    protected $organization;
    protected $programRequest;

    protected function setUp(): void
    {

        $this->uniqueId = uniqid();
        $this->name ='A super cool name2';
        $this->point ='1000';
        $this->phone ='902109021';
        $this->url ='alldigitalrewards-demo.mydigitalrewards.com';
        $this->active ='24';
        $this->logo ='testlogo';
        $this->organization ='alldigitalrewards';
        $this->programRequest = new ProgramRequest(
            $this->uniqueId,
            $this->name,
            $this->point,
            $this->phone,
            $this->url,
            $this->active,
            $this->logo,
            $this->organization
        );
    }

    public function testGetHttpEndpoint()
    {
        $expectedUrl = '/api/program/' .$this->uniqueId;
        $this->assertEquals($expectedUrl, $this->programRequest->getHttpEndpoint());
    }

    public function testGetResponseObject()
    {
        $this->assertInstanceOf(
            ProgramResponse::class,
            $this->programRequest->getResponseObject()
        );
    }

    public function testJsonSerialize()
    {
        $expectedArray = [
            "name" => $this->name,
            "point" => $this->point,
            "phone" => $this->phone,
            "url" =>$this->url,
            "active" =>$this->active,
            "logo" => $this->logo,
            "organization" => $this->organization,

        ];

        $this->assertEquals(
            $expectedArray,
            $this->programRequest->jsonSerialize()
        );
    }
}
