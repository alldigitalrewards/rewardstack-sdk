<?php

namespace AllDigitalRewards\RewardStack\Participant;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;

class ParticipantRetrieveRequest extends AbstractApiRequest
{
    /**
     * @var string
     */
    private $programId;
    /**
     * @var string
     */
    private $uniqueId;

    protected $httpEndpoint = 'GET';

    public function __construct(string $programId, string $uniqueId)
    {
        $this->programId = $programId;
        $this->uniqueId = $uniqueId;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/program/{$this->programId}/participant/$this->uniqueId";
    }

    public function getResponseObject(): AbstractEntity
    {
        return new ParticipantRetrieveResponse();
    }

    public function jsonSerialize(): array
    {
        return [];
    }
}
