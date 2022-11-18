<?php

namespace AllDigitalRewards\RewardStack\Adjustment;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;

class CreateAdjustmentRequest extends AbstractApiRequest
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
    private $type;

    /**
     * @var string
     */
    private $pointAmount;

    /**
     * @var string|null
     */
    private $referenceId;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $activity;

    /**
     * @var string|null
     */
    private $completedAt;

    protected $httpMethod = 'POST';

    /**
     * CreateAdjustmentRequest constructor.
     * @param string $programId
     * @param string $uniqueId
     * @param string $type
     * @param string $pointAmount
     * @param string|null $referenceId
     * @param string|null $description
     */
    public function __construct(
        string $programId,
        string $uniqueId,
        string $type,
        string $pointAmount,
        string $referenceId = null,
        string $description = null,
        string $activity = null,
        string $complatedAt = null
    ) {
    
        $this->programId = $programId;
        $this->uniqueId = $uniqueId;
        $this->type = $type;
        $this->pointAmount = $pointAmount;
        $this->referenceId = $referenceId;
        $this->description = $description;
        $this->activity = $activity;
        $this->completedAt = $complatedAt;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/program/{$this->programId}/participant/$this->uniqueId/adjustment";
    }

    public function getResponseObject(): AbstractEntity
    {
        return new CreateAdjustmentResponse();
    }

    public function jsonSerialize(): array
    {
        return [
            "type" => $this->type,
            "amount" => $this->pointAmount,
            "reference" => $this->referenceId,
            'description' => $this->description,
            'activity' => $this->activity,
            'completed_at' => $this->completedAt,
        ];
    }
}
