<?php

namespace AllDigitalRewards\RewardStack\Auth;

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
        if ($this->expires > (time() - 600)) {
            return false;
        }

        return true;
    }
}
