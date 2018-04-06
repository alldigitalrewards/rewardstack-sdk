<?php

namespace AllDigitalRewards\RewardStack\Sso;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApirequest;

class SsoTokenRequest extends AbstractApiRequest
{

    /**
     * @var string
     */
    private $uniqueId;

    protected $httpMethod = 'POST';

    /**
     * GetParticipantRequest constructor.
     * @param string $uniqueId
     */
    public function __construct(string $uniqueId)
    {
        $this->uniqueId = $uniqueId;
    }

    public function getHttpEndpoint(): string
    {
        return '/api/user/' . $this->uniqueId . '/sso';
    }

    public function getResponseObject(): AbstractEntity
    {
        return new SsoTokenResponse();
    }

    public function jsonSerialize()
    {
        return [];
    }
}
