<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Organization\OrganizationPutRequest;
use AllDigitalRewards\RewardStack\Organization\OrganizationResponse;
use PHPUnit\Framework\TestCase;

class OrganizationRequestTest extends TestCase
{
    protected $uniqueId;
    protected $username;
    protected $password;
    protected $name;
    protected $domains;
    protected $organizationRequest;

    protected function setup()
    {
        $this->uniqueId = uniqid();
        $this->name = 'ABC123A123 Name';
        $this->domains = '["alldigitalrewards-1reward-test.com", "sharecarerewards1.com"]';

        $this->organizationRequest = new OrganizationPutRequest(
            $this->uniqueId,
            $this->name,
            $this->domains,
        );
    }

    public function testGetHttpEndpoint()
    {
        $expectedUrl = '/api/organization/' . $this->uniqueId;
        $this->assertEquals($expectedUrl, $this->organizationRequest->getHttpEndpoint());
    }

    public function testGetResponseObject()
    {
        $this->assertInstanceOf(
            OrganizationResponse::class,
            $this->organizationRequest->getResponseObject()
        );
    }

    public function testJsonSerialize()
    {
        $expectedArray = [
            "name" => $this->name,
            "domains" => $this->domains,
            "unique_id" => $this->uniqueId,
        ];

        $this->assertEquals(
            $expectedArray,
            $this->organizationRequest->jsonSerialize()
        );
    }
}
