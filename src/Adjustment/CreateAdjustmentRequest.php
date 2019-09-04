<?php

namespace AllDigitalRewards\RewardStack\Adjustment;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;

class CreateAdjustmentRequest extends AbstractApiRequest
{
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

    private $referenceId = null;

    protected $httpMethod = 'POST';

    /**
     * GetParticipantRequest constructor.
     * @param string $uniqueId
     * @param string $type
     * @param string $pointAmount
     * @param string $referenceId
     */
    public function __construct(
        string $uniqueId,
        string $type,
        string $pointAmount,
        string $referenceId = null
    )
    {
        $this->uniqueId = $uniqueId;
        $this->type = $type;
        $this->pointAmount = $pointAmount;
        $this->referenceId = $referenceId;
    }

    public function getHttpEndpoint(): string
    {
        return '/api/user/' . $this->uniqueId . '/adjustment';
    }

    public function getResponseObject(): AbstractEntity
    {
        return new CreateAdjustmentResponse();
    }

    public function jsonSerialize()
    {
        return [
            "type" => $this->type,
            "amount" => $this->pointAmount,
            "reference" => $this->referenceId
        ];
    }
}
