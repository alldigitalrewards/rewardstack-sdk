<?php

namespace AllDigitalRewards\RewardStack\Transaction;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;

class AddTransactionMetaRequest extends AbstractApiRequest
{
    private $programId;

    private $uniqueId;

    private $transactionId;

    private $meta;

    protected $httpMethod = 'PATCH';

    /**
     * AddTransactionMetaRequest constructor.
     * @param string $programId
     * @param string $uniqueId
     * @param int $transactionId
     * @param array $meta
     */
    public function __construct(
        string $programId,
        string $uniqueId,
        int $transactionId,
        array $meta
    ) {
        $this->programId = $programId;
        $this->uniqueId = $uniqueId;
        $this->transactionId = $transactionId;
        $this->meta = $meta;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/program/$this->programId/participant/$this->uniqueId/transaction/$this->transactionId/meta";
    }

    public function getResponseObject(): AbstractEntity
    {
        return new AddTransactionMetaResponse();
    }

    public function jsonSerialize()
    {
        if (empty($this->meta)) {
            throw new \Exception('Transaction meta data has to be provided to request transaction meta update');
        }

        return [
            "meta" => $this->meta
        ];
    }
}
