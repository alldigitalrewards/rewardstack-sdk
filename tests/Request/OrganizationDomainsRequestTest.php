<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Organization\OrganizationDomainsRequest;
use AllDigitalRewards\RewardStack\Organization\OrganizationDomainsResponse;
use PHPUnit\Framework\TestCase;

class OrganizationDomainsRequestTest extends TestCase
{
    protected $uniqueId;
    protected $organizationDomainsRequest;

    protected function setUp(): void
    {
        $this->uniqueId = uniqid();
        $this->organizationDomainsRequest = new OrganizationDomainsRequest($this->uniqueId);
    }

    public function testGetHttpEndpoint()
    {
        $expectedUrl = '/api/organization/' . $this->uniqueId. '/domain';
        $this->assertEquals($expectedUrl, $this->organizationDomainsRequest->getHttpEndpoint());
    }

    public function testGetResponseObject()
    {
        $this->assertInstanceOf(
            OrganizationDomainsResponse::class,
            $this->organizationDomainsRequest->getResponseObject()
        );
    }
}
