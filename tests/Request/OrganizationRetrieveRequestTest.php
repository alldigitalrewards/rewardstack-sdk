<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Organization\OrganizationRetrieveRequest;
use AllDigitalRewards\RewardStack\Organization\OrganizationRetreiveResponse;
use PHPUnit\Framework\TestCase;

class OrganizationRetrieveRequestTest extends TestCase
{
    protected $uniqueId;
    protected $organizationRetrieveRequest;

    protected function setUp()
    {
        $this->uniqueId = uniqid();
        $this->organizationRetrieveRequest = new OrganizationRetrieveRequest($this->uniqueId);
    }

    public function testGetHttpEndpoint()
    {
        $expectedUrl = '/api/organization/' . $this->uniqueId ;
        $this->assertEquals($expectedUrl, $this->organizationRetrieveRequest->getHttpEndpoint());
    }

    public function testGetResponseObject()
    {
        $this->assertInstanceOf(
            OrganizationRetreiveResponse::class,
            $this->organizationRetrieveRequest->getResponseObject()
        );
    }
}
