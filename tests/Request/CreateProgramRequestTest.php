<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Program\CreateProgramRequest;
use AllDigitalRewards\RewardStack\Program\CreateProgramResponse;
use PHPUnit\Framework\TestCase;

class CreateProgramRequestTest extends TestCase
{
    protected $organization;
    protected $uniqueId;
    protected $name;
    protected $point;
    protected $phone;
    protected $url;
    protected $active;
    protected $logo;
    protected $createProgramRequest;

    protected function setUp()
    {
        $this->organization ='sharecare';
        $this->uniqueId = uniqid();
        $this->name ='A super cool name2';
        $this->point ='1000';
        $this->phone ='902109021';
        $this->url ='sharecare-demo.mydigitalrewards.com';
        $this->active ='24';
        $this->logo ='testlogo';
        $this->createProgramRequest = new CreateProgramRequest(
            $this->organization,
            $this->uniqueId,
            $this->name,
            $this->point,
            $this->phone,
            $this->url,
            $this->active,
            $this->logo
        );
    }

    public function testGetHttpEndpoint()
    {
        $expectedUrl = '/api/program';
        $this->assertEquals($expectedUrl, $this->createProgramRequest->getHttpEndpoint());
    }

    public function testGetResponseObject()
    {
        $this->assertInstanceOf(
            CreateProgramResponse::class,
            $this->createProgramRequest->getResponseObject()
        );
    }

    public function testJsonSerialize()
    {
        $expectedArray = [
            "organization" => $this->organization,
            "uniqueId" => $this->uniqueId,
            "name" => $this->name,
            "point" => $this->point,
            "phone" => $this->phone,
            "url" =>$this->url,
            "active" =>$this->active,
            "logo" => $this->logo

        ];

        $this->assertEquals(
            $expectedArray,
            $this->createProgramRequest->jsonSerialize()
        );
    }
}
