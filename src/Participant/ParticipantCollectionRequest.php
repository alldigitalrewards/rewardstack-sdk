<?php

namespace AllDigitalRewards\RewardStack\Participant;

use AllDigitalRewards\RewardStack\Common\AbstractApiCollectionRequest;
use AllDigitalRewards\RewardStack\Common\CollectionFilterInterface;
use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;

class ParticipantCollectionRequest extends AbstractApiCollectionRequest
{
    /**
     * @var string
     */
    private $programId;

    /**
     * ParticipantCollectionRequest constructor.
     * @param string $programId
     * @param int $page
     * @param int $limit
     * @param CollectionFilterInterface|null $filter
     */
    public function __construct(
        string $programId,
        int $page = 1,
        int $limit = 30,
        CollectionFilterInterface $filter = null
    ) {
        parent::__construct($page, $limit, $filter);
        $this->programId = $programId;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/program/{$this->programId}/participant";
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
