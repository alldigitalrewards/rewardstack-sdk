<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Request\OrganizationListRequest;
use AllDigitalRewards\RewardStack\Response\OrganizationListResponse;
use PHPUnit\Framework\TestCase;

class OrganizationListRequestTest extends TestCase
{
    protected $organizationListRequest;

    protected function setUp()
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
