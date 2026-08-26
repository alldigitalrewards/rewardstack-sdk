<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack;
use AllDigitalRewards\RewardStack\Auth\AuthProxy;
use AllDigitalRewards\RewardStack\Common\Entity\ProgramProduct;
use AllDigitalRewards\RewardStack\Product\ProgramProductRetrieveRequest;
use AllDigitalRewards\RewardStack\Product\ProgramProductRetrieveResponse;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class ProgramProductRetrieveResponseTest extends TestCase
{
    public function testRequest()
    {
        $jsonData = file_get_contents(__DIR__ . "/../fixtures/program_product_retrieve_response.json");

        $uri = new \GuzzleHttp\Psr7\Uri('http://localhost');

        $authProxy = $this->createMock(AuthProxy::class);

        $authProxy->method('getUri')
            ->willReturn($uri);

        $authProxy->method('request')
            ->willReturn(new Response(
                200,
                [],
                $jsonData
            ));

        $client = new RewardStack\Client($authProxy);

        $programProductRetrieveRequest = new ProgramProductRetrieveRequest(
            'alldigitalrewards',
            ['PS0000889497-24']
        );
        $response = $client->request($programProductRetrieveRequest);

        $this->assertInstanceOf(
            ProgramProductRetrieveResponse::class,
            $response
        );

        $this->assertEquals(1, $response->count());

        $product = $response->getItem(0);

        $this->assertInstanceOf(ProgramProduct::class, $product);
        $this->assertEquals('PS0000889497-24', $product->getSku());
        $this->assertEquals('LG 25" Full HD UltraWide 21:9 IPS Monitor', $product->getName());
        $this->assertEquals(1, $product->getActive());
        $this->assertEquals('replink', $product->getVendor());
    }

    public function testHydrateEmptyResultLeavesCollectionEmpty()
    {
        $response = new ProgramProductRetrieveResponse();
        $response->hydrate([]);

        $this->assertEquals(0, $response->count());
        $this->assertNull($response->getItem(0));
    }
}
