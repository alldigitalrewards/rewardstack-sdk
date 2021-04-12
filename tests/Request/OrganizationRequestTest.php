<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Organization\OrganizationRequest;
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

    protected function setup(): void
    {
        $this->uniqueId = uniqid();
        $this->username = 'abc123a123';
        $this->password ='ABC123A123';
        $this->name ='ABC123A123 Name';
        $this->domains ='["sharecare-1reward-test.com", "sharecarerewards1.com"]';

        $this->organizationRequest = new OrganizationRequest(
            $this->uniqueId,
            $this->username,
            $this->password,
            $this->name,
            $this->domains
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
            "username" => $this->username,
            "password" => $this->password,
            "name" => $this->name,
            "domains" => $this->domains
        ];

        $this->assertEquals(
            $expectedArray,
            $this->organizationRequest->jsonSerialize()
        );
    }
}
