<?php

namespace AllDigitalRewards\Tests\Common\Entity;

use AllDigitalRewards\RewardStack\Common\Entity\ParticipantCollection;
use PHPUnit\Framework\TestCase;

class ParticipantCollectionSharedCreditTest extends TestCase
{
    public function testSharedCreditHydratesFromPayload()
    {
        $participant = new ParticipantCollection([
            'email_address' => 'test@alldigitalrewards.com',
            'credit' => '30000.00',
            'shared_credit' => '4500.00',
        ]);

        $this->assertEquals('4500.00', $participant->getSharedCredit());
    }

    public function testSharedCreditIsIncludedInToArray()
    {
        $participant = new ParticipantCollection([
            'email_address' => 'test@alldigitalrewards.com',
            'shared_credit' => '4500.00',
        ]);

        $this->assertArrayHasKey('shared_credit', $participant->toArray());
        $this->assertEquals('4500.00', $participant->toArray()['shared_credit']);
    }

    public function testSharedCreditDefaultsToNullWhenAbsent()
    {
        $participant = new ParticipantCollection([
            'email_address' => 'test@alldigitalrewards.com',
            'credit' => '30000.00',
        ]);

        $this->assertNull($participant->getSharedCredit());
    }
}
