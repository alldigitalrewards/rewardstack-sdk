<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Product\ProgramProductRetrieveRequest;
use AllDigitalRewards\RewardStack\Product\ProgramProductRetrieveResponse;
use PHPUnit\Framework\TestCase;

class ProgramProductRetrieveRequestTest extends TestCase
{
    protected $program = 'alldigitalrewards';
    protected $sku = 'PS0000889497-24';
    protected $programProductRetrieveRequest;

    protected function setUp(): void
    {
        $this->programProductRetrieveRequest = new ProgramProductRetrieveRequest(
            $this->program,
            [$this->sku]
        );
    }

    public function testGetHttpEndpoint()
    {
        $this->assertEquals(
            '/api/product/program/catalog/',
            $this->programProductRetrieveRequest->getHttpEndpoint()
        );
    }

    public function testGetHttpMethod()
    {
        $this->assertEquals('GET', $this->programProductRetrieveRequest->getHttpMethod());
    }

    public function testGetQueryParams()
    {
        $this->assertEquals(
            'program=alldigitalrewards&sku[]=PS0000889497-24&limit=1',
            $this->programProductRetrieveRequest->getQueryParams()
        );
    }

    public function testGetQueryParamsWithMultipleSkusAndCustomLimit()
    {
        $request = new ProgramProductRetrieveRequest($this->program, ['SKU-A', 'SKU-B'], 5);

        $this->assertEquals(
            'program=alldigitalrewards&sku[]=SKU-A&sku[]=SKU-B&limit=5',
            $request->getQueryParams()
        );
    }

    public function testGetResponseObject()
    {
        $this->assertInstanceOf(
            ProgramProductRetrieveResponse::class,
            $this->programProductRetrieveRequest->getResponseObject()
        );
    }
}
