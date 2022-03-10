<?php

namespace AllDigitalRewards\RewardStack\Transaction;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use AllDigitalRewards\RewardStack\Common\Entity\Transaction;

class TransactionSingleRequest extends AbstractApiRequest
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
        return "/api/program/{$this->programId}/participant/$this->uniqueId/transaction/{$this->transactionId}";
    }

    public function getResponseObject(): AbstractEntity
    {
        return new Transaction();
    }

    public function jsonSerialize()
    {
        return [];
    }
}
