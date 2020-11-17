<?php

namespace AllDigitalRewards\RewardStack\Transaction;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;

class SingleUserTransactionRequest extends AbstractApiRequest
{
    /**
     * @var string
     */
    private $programId;
    /**
     * @var string
     */
    private $uniqueId;

    private $transactionId;

    protected $httpMethod = 'GET';

    /**
     * SingleUserTransactionRequest constructor.
     * @param string $programId
     * @param string $uniqueId
     * @param int $transactionId
     */
    public function __construct(string $programId, string $uniqueId, int $transactionId)
    {
        $this->programId = $programId;
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
