<?php

namespace AllDigitalRewards\RewardStack\Transaction;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApirequest;

class SingleUserTransactionRequest extends AbstractApiRequest
{

    /**
     * @var string
     */
    private $uniqueId;

    private $transactionId;

    protected $httpMethod = 'GET';

    /**
     * GetParticipantRequest constructor.
     * @param string $uniqueId
     */
    public function __construct(string $uniqueId, int $transactionId)
    {
        $this->uniqueId = $uniqueId;
        $this->transactionId = $transactionId;
    }

    public function getHttpEndpoint(): string
    {
        return '/api/user/' . $this->uniqueId. '/transaction/' . $this->transactionId;
    }

    public function getResponseObject(): AbstractEntity
    {
        return new SingleUserTransactionResponse();
    }

    public function jsonSerialize()
    {
        return [];
    }
}
