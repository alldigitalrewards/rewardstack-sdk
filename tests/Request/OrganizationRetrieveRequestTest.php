<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Request\OrganizationReteriveRequest;
use AllDigitalRewards\RewardStack\Response\OrganizationReteriveResponse;
use PHPUnit\Framework\TestCase;

class OrganizationRetrieveRequestTest extends TestCase
{
    protected $uniqueId;
    protected $organizationRetrieveRequest;

    protected function setUp()
    {
        $this->uniqueId = uniqid();
        $this->organizationRetrieveRequest = new OrganizationReteriveRequest($this->uniqueId);
    }

    public function testGetHttpEndpoint()
    {
        $expectedUrl = '/api/organization/' . $this->uniqueId ;
        $this->assertEquals($expectedUrl, $this->organizationRetrieveRequest->getHttpEndpoint());
    }

    public function testGetResponseObject()
    {
        $this->assertInstanceOf(
            OrganizationReteriveResponse::class,
            $this->organizationRetrieveRequest->getResponseObject()
        );
    }
}
