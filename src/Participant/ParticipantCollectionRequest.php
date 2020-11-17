<?php

namespace AllDigitalRewards\RewardStack\Participant;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;

class ParticipantCollectionRequest extends AbstractApiRequest
{
    /**
     * @var string
     */
    private $programId;

    /**
     * @var int
     */
    private $page = 1;

    /**
     * ParticipantCollectionRequest constructor.
     * @param string $programId
     * @param int $page
     */
    public function __construct(string $programId, int $page = 1)
    {
        $this->programId = $programId;
        $this->page = $page;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/program/{$this->programId}/participant";
    }

    public function getQueryParams(): string
    {
        return "page=" . $this->page;
    }

    public function getResponseObject(): AbstractEntity
    {
        return new ParticipantCollectionResponse();
    }

    public function jsonSerialize()
    {
        return [];
    }
}
