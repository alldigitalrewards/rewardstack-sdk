<?php

namespace AllDigitalRewards\RewardStack\Transaction;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;

class ParticipantTransactionCollectionRequest extends AbstractApiRequest
{
    /**
     * @var string
     */
    private $programId;
    /**
     * @var string
     */
    private $uniqueId;

    private $year;

    protected $httpMethod = 'GET';

    /**
     * UserTransactionCollectionRequest constructor.
     * @param string $programId
     * @param string $uniqueId
     * @param string $year
     */
    public function __construct(string $programId, string $uniqueId, string $year = '')
    {
        $this->programId = $programId;
        $this->uniqueId = $uniqueId;
        $this->year = $year;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/program/{$this->programId}/participant/$this->uniqueId/transaction";
    }

    public function getResponseObject(): AbstractEntity
    {
        return new TransactionResponse();
    }

    public function jsonSerialize()
    {
        return [];
    }

    public function getQueryParams(): string
    {
        if (empty($this->year) === false) {
            return 'year=' . $this->year;
        }
        return '';
    }
}
