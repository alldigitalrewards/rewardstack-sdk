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
    private DateTime $currentTime;

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

    public function getCurrentTime(): DateTime
    {
        if (!isset($this->currentTime)) {
            $this->currentTime = new DateTime();
        }
        return $this->currentTime;
    }

    public function setCurrentTime(DateTime $currentTime): void
    {
        $this->currentTime = $currentTime;
    }

    public function isExpired(): bool
    {
        $expiry = new DateTime();
        $expiry->setTimestamp($this->expires);
        $expiry = $expiry->modify('-10 minutes');
        return $this->getCurrentTime() > $expiry;
    }
}
