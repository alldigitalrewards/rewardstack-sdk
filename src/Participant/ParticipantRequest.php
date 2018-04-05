<?php

namespace AllDigitalRewards\RewardStack\Participant;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApirequest;

class ParticipantRequest extends AbstractApiRequest
{
    /**
     * @var string
     */
    private $uniqueId;

    public function __construct(string $uniqueId)
    {
        $this->uniqueId = $uniqueId;
    }

    public function getHttpEndpoint(): string
    {
        return '/api/user/' . $this->uniqueId;
    }

    public function getResponseObject(): AbstractEntity
    {
        return new ParticipantResponse();
    }

    public function jsonSerialize()
    {
        return [];
    }
}
