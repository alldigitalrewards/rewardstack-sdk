<?php

namespace AllDigitalRewards\RewardStack\Adjustment;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApirequest;

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
     * @var int
     */
    private $amount;

    private $referenceId = null;

    protected $httpMethod = 'POST';

    /**
     * GetParticipantRequest constructor.
     * @param string $uniqueId
     * @param string $type
     * @param int $amount
     * @param string $referenceId
     */
    public function __construct(string $uniqueId, string $type, int $amount, string $referenceId = null)
    {
        $this->uniqueId = $uniqueId;
        $this->type = $type;
        $this->amount = $amount;
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
            "amount" => $this->amount,
            "reference" => $this->referenceId
        ];
    }
}
