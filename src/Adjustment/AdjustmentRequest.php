<?php

namespace AllDigitalRewards\RewardStack\Adjustment;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;

class AdjustmentRequest extends AbstractApiRequest
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
     * @var int
     */
    private $page = 1;

    protected $httpMethod = 'GET';

    /**
     * AdjustmentRequest constructor.
     * @param string $programId
     * @param string $uniqueId
     * @param int $page
     */
    public function __construct(string $programId, string $uniqueId, int $page = 1)
    {
        $this->programId = $programId;
        $this->uniqueId = $uniqueId;
        $this->page = $page;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/program/{$this->programId}/participant/$this->uniqueId/adjustment";
    }

    public function getQueryParams(): string
    {
        return 'page=' . $this->page;
    }

    public function getResponseObject(): AbstractEntity
    {
        return new AdjustmentResponse();
    }

    public function jsonSerialize()
    {
        return [];
    }
}
