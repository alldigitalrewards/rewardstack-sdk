<?php

namespace Auth;

use AllDigitalRewards\RewardStack\Auth\JwtToken;
use PHPUnit\Framework\TestCase;

class JwtTokenExpiryTest extends TestCase
{
    /**
     * @group jwt
     */
    public function testNotExpired()
    {
        //test greater than 10 minute difference so we need to add just over 20 minutes
        $time = time() + 1300;
        $jwtToken = new JwtToken('token', $time);
        $this->assertFalse($jwtToken->isExpired());
    }

    /**
     * @group jwt
     */
    public function testExpired()
    {
        //time plus 10 minutes
        $time = time() + 600;
        $jwtToken = new JwtToken('token', $time);
        $this->assertTrue($jwtToken->isExpired());
    }
}
