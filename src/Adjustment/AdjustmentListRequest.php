<?php

namespace AllDigitalRewards\RewardStack\Adjustment;

use AllDigitalRewards\RewardStack\Common\AbstractApiCollectionRequest;
use AllDigitalRewards\RewardStack\Common\CollectionFilterInterface;
use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;

class AdjustmentListRequest extends AbstractApiCollectionRequest
{
    /**
     * @var string
     */
    private $programId;

    /**
     * @var string
     */
    private $uniqueId;

    public function __construct(
        string $programId,
        string $uniqueId,
        int $page = 1,
        int $limit = 30,
        CollectionFilterInterface $filter = null
    ) {
        parent::__construct($page, $limit, $filter);
        $this->programId = $programId;
        $this->uniqueId = $uniqueId;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/program/{$this->programId}/participant/$this->uniqueId/adjustment";
    }

    public function getResponseObject(): AbstractEntity
    {
        return new AdjustmentListResponse();
    }

    public function jsonSerialize()
    {
        return [];
    }
}
