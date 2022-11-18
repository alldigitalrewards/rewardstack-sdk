<?php

namespace AllDigitalRewards\RewardStack\Sso;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use AllDigitalRewards\RewardStack\Participant\ParticipantResponse;

class SsoUserAuthRequest extends AbstractApiRequest
{
    /**
     * @var string
     */
    private $programId;
    /**
     * @var string
     */
    private $uniqueId;
    /**
     * @var string
     */
    private $token;

    protected $httpMethod = 'GET';

    /**
     * @param string $programId
     * @param string $uniqueId
     * @param string $token
     */
    public function __construct(
        string $programId,
        string $uniqueId,
        string $token
    ) {
        $this->programId = $programId;
        $this->uniqueId = $uniqueId;
        $this->token = $token;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/program/{$this->programId}/participant/$this->uniqueId/sso";
    }

    //Auth Get returns Participant
    public function getResponseObject(): AbstractEntity
    {
        return new ParticipantResponse();
    }

    public function jsonSerialize(): array
    {
        return [];
    }

    public function getQueryParams(): string
    {
        return 'token=' . $this->token;
    }
}
