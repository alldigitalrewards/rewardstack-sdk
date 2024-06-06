<?php

namespace AllDigitalRewards\RewardStack\Auth;

use DateTime;

class JwtToken
{
    /**
     * @var string
     */
    protected $token;

    /**
     * @var int
     */
    protected $expires;

    /**
     * JwtToken constructor.
     * @param string $token
     * @param int $expires
     */
    public function __construct(string $token, int $expires)
    {
        $this->token = $token;
        $this->expires = $expires;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @return int
     */
    public function getExpires(): int
    {
        return $this->expires;
    }

    public function isExpired(): bool
    {
        $expiry = new DateTime();
        $expiry->setTimestamp($this->expires);
        $expiry = $expiry->modify('-10 minutes');
        return new DateTime() > $expiry;
    }
}
