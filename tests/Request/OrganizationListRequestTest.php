<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Organization\OrganizationListRequest;
use AllDigitalRewards\RewardStack\Organization\OrganizationListResponse;
use PHPUnit\Framework\TestCase;

class OrganizationListRequestTest extends TestCase
{
    protected $organizationListRequest;

    protected function setUp(): void
    {

        $this->organizationListRequest = new OrganizationListRequest;
    }
    public function testGetHttpEndpoint()
    {
        $expectedUrl = '/api/organization';
        $this->assertEquals($expectedUrl, $this->organizationListRequest->getHttpEndpoint());
    }

    public function testGetResponseObject()
    {
        $this->assertInstanceOf(
            OrganizationListResponse::class,
            $this->organizationListRequest->getResponseObject()
        );
    }
}
