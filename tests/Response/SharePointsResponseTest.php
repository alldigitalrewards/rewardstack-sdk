<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Share\SharePointsResponse;
use PHPUnit\Framework\TestCase;

class SharePointsResponseTest extends TestCase
{
    public function testHydrate()
    {
        $data = [
            'credit' => 100.00,
            'shared_credit' => 400.50,
        ];

        $response = new SharePointsResponse();
        $response->hydrate($data);

        $this->assertEquals(100.00, $response->getCredit());
        $this->assertEquals(400.50, $response->getSharedCredit());
    }

    public function testGetTotalBalance()
    {
        $response = new SharePointsResponse();
        $response->setCredit(100.00);
        $response->setSharedCredit(250.50);

        $this->assertEquals(350.50, $response->getTotalBalance());
    }

    public function testGetTotalBalanceWithNullValues()
    {
        $response = new SharePointsResponse();

        $this->assertEquals(0.0, $response->getTotalBalance());
    }

    public function testSettersAndGetters()
    {
        $response = new SharePointsResponse();

        $response->setCredit(150.25);
        $this->assertEquals(150.25, $response->getCredit());

        $response->setSharedCredit(300.75);
        $this->assertEquals(300.75, $response->getSharedCredit());
    }
}
