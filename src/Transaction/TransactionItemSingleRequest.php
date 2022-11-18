<?php

namespace AllDigitalRewards\RewardStack\Transaction;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use AllDigitalRewards\RewardStack\Common\Entity\Transaction;

class TransactionItemSingleRequest extends AbstractApiRequest
{
    /**
     * @var string
     */
    private $programId;
    /**
     * @var string
     */
    private $uniqueId;

    private $guid;

    protected $httpMethod = 'GET';

    public function __construct(string $programId, string $uniqueId, string $guid)
    {
        $this->programId = $programId;
        $this->uniqueId = $uniqueId;
        $this->guid = $guid;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/program/{$this->programId}/participant/{$this->uniqueId}/transaction/items/{$this->guid}";
    }

    public function getResponseObject(): AbstractEntity
    {
        return new Transaction();
    }

    public function jsonSerialize(): array
    {
        return [];
    }
}
