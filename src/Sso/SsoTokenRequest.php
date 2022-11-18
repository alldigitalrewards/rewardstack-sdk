<?php

namespace AllDigitalRewards\RewardStack\Sso;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;

class SsoTokenRequest extends AbstractApiRequest
{
    /**
     * @var string
     */
    private $programId;
    /**
     * @var string
     */
    private $uniqueId;

    protected $httpMethod = 'POST';

    /**
     * GetParticipantRequest constructor.
     * @param string $uniqueId
     */
    public function __construct(string $programId, string $uniqueId)
    {
        $this->programId = $programId;
        $this->uniqueId = $uniqueId;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/program/{$this->programId}/participant/$this->uniqueId/sso";
    }

    public function getResponseObject(): AbstractEntity
    {
        return new SsoTokenResponse();
    }

    public function jsonSerialize(): array
    {
        return [];
    }
}
