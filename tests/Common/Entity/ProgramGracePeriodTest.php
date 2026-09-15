<?php

namespace AllDigitalRewards\Tests\Common\Entity;

use AllDigitalRewards\RewardStack\Common\Entity\Program;
use PHPUnit\Framework\TestCase;

class ProgramGracePeriodTest extends TestCase
{
    public function testGracePeriodHydratesFromPayload()
    {
        $program = new Program([
            'unique_id' => 'synthetic-program',
            'end_date' => '2026-12-31 23:59:59',
            'grace_period' => 30,
        ]);

        $this->assertSame(30, $program->getGracePeriod());
    }

    public function testGracePeriodSurvivesJsonRoundTrip()
    {
        $program = new Program([
            'unique_id' => 'synthetic-program',
            'grace_period' => 30,
        ]);

        $rehydrated = new Program(json_decode(json_encode($program), true));

        $this->assertSame(30, $rehydrated->getGracePeriod());
    }

    public function testGracePeriodDefaultsToNullWhenAbsent()
    {
        $program = new Program([
            'unique_id' => 'synthetic-program',
            'end_date' => '2026-12-31 23:59:59',
        ]);

        $this->assertNull($program->getGracePeriod());
    }
}
