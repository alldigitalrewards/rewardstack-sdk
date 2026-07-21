<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\RewardStack\Common\Entity\Adjustment;
use PHPUnit\Framework\TestCase;

class AdjustmentShareContextTest extends TestCase
{
    public function testHydratesShareContextFields()
    {
        $adjustment = new Adjustment([
            'amount' => 300,
            'type' => 'credit',
            'reference' => 'share-492e1c34',
            'description' => 'Thanks for covering my shift - coffee on me!',
            'shareable' => 1,
            'id' => 23,
            'share_direction' => 'received',
            'counterparty_name' => 'Give Points',
            'share_message' => 'Thanks for covering my shift - coffee on me!',
        ]);

        $this->assertSame('received', $adjustment->getShareDirection());
        $this->assertSame('Give Points', $adjustment->getCounterpartyName());
        $this->assertSame('Thanks for covering my shift - coffee on me!', $adjustment->getShareMessage());
    }

    public function testShareContextFieldsDefaultToNull()
    {
        $adjustment = new Adjustment([
            'amount' => 500,
            'type' => 'credit',
            'id' => 300,
        ]);

        $this->assertNull($adjustment->getShareDirection());
        $this->assertNull($adjustment->getCounterpartyName());
        $this->assertNull($adjustment->getShareMessage());
    }

    public function testSentDirectionWithoutMessage()
    {
        $adjustment = new Adjustment([
            'reference' => 'share-cd1a99',
            'shareable' => 1,
            'share_direction' => 'sent',
            'counterparty_name' => 'def@email.com',
            'share_message' => null,
        ]);

        $this->assertSame('sent', $adjustment->getShareDirection());
        $this->assertSame('def@email.com', $adjustment->getCounterpartyName());
        $this->assertNull($adjustment->getShareMessage());
    }

    public function testShareContextSettersAndGetters()
    {
        $adjustment = new Adjustment();

        $adjustment->setShareDirection('sent');
        $adjustment->setCounterpartyName('Get Points');
        $adjustment->setShareMessage('Here you go');

        $this->assertSame('sent', $adjustment->getShareDirection());
        $this->assertSame('Get Points', $adjustment->getCounterpartyName());
        $this->assertSame('Here you go', $adjustment->getShareMessage());
    }
}
