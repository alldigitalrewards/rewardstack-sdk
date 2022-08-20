<?php

namespace Auth;

use AllDigitalRewards\RewardStack\Auth\JwtToken;
use PHPUnit\Framework\TestCase;

class JwtTokenTest extends TestCase
{

    public function testIsExpired()
    {
        $jwtToken = new JwtToken('token', time());

        // It expires 10 minutes before the current time.
        self::assertTrue($jwtToken->isExpired());
    }

    public function testIsNotExpired()
    {
        $jwtToken = new JwtToken('token', time() + 700);

        // It expires 10 minutes before the current time.
        self::assertFalse($jwtToken->isExpired());
    }
}
