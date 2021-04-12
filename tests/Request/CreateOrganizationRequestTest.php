<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Organization\CreateOrganizationRequest;
use AllDigitalRewards\RewardStack\Organization\CreateOrganizationResponse;
use PHPUnit\Framework\TestCase;

class CreateOrganizationRequestTest extends TestCase
{
    protected $uniqueId;
    protected $username;
    protected $name;
    protected $phone;
    protected $address1;
    protected $address2;
    protected $city;
    protected $state;
    protected $zip;
    protected $parent;
    protected $createOrganizationRequest;

    protected function setup(): void
    {
        $this->uniqueId = uniqid();
        $this->username = 'TestABC #1';
        $this->name = 'Over the Rainbow';
        $this->phone = '1233211230';
        $this->address1 ='123 Acme St';
        $this->address2 ='';
        $this->city ='Beverly Hills';
        $this->state = 'CA';
        $this->zip ='90210';
        $this->parent ='';
        $this->createOrganizationRequest = new CreateOrganizationRequest(
            $this->uniqueId,
            $this->username,
            $this->name,
            $this->phone,
            $this->address1,
            $this->address2,
            $this->city,
            $this->state,
            $this->zip,
            $this->parent
        );
    }


    public function testGetHttpEndpoint()
    {
        $expectedUrl = '/api/organization';
        $this->assertEquals($expectedUrl, $this->createOrganizationRequest
            ->getHttpEndpoint());
    }

    public function testGetResponseObject()
    {
        $this->assertInstanceOf(
            CreateOrganizationResponse::class,
            $this
                ->createOrganizationRequest
            ->getResponseObject()
        );
    }

    public function testJsonSerialize()
    {
        $expectedArray = [
            "unique_id" => $this->uniqueId,
            "username" => $this->username,
            "name" => $this->name,
            "phone" => $this->phone,
            "address1" =>$this->address1,
            "address2" =>$this->address2,
            "city" => $this->city,
            "state" => $this->state,
            "zip" => $this->zip
        ];

        $this->assertEquals(
            $expectedArray,
            $this->createOrganizationRequest->jsonSerialize()
        );
    }
}
