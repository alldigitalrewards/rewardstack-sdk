<?php

namespace AllDigitalRewards\RewardStack\Transaction;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEmptyResponseEntity;
use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use AllDigitalRewards\RewardStack\Traits\MetaValidationTrait;
use Exception;

class AddTransactionMetaRequest extends AbstractApiRequest
{
    use MetaValidationTrait;

    private $programId;

    private $uniqueId;

    private $transactionId;

    private $meta;

    protected $httpMethod = 'PATCH';

    /**
     * AddTransactionMetaRequest constructor.
     * @param string $programId
     * @param string $uniqueId
     * @param $transactionId
     * @param array $meta
     */
    public function __construct(
        string $programId,
        string $uniqueId,
        $transactionId,
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
        return new AbstractEmptyResponseEntity();
    }

    /**
     * @throws Exception
     */
    public function jsonSerialize()
    {
        if (empty($this->transactionId) === true) {
            throw new Exception(
                'Transaction Id must be present to request transaction meta update'
            );
        }

        if (empty($this->meta) || $this->hasWellFormedMeta($this->meta) === false) {
            throw new Exception(
                'Transaction meta data has to be provided and valid key/values to request transaction meta update'
            );
        }

        return $this->meta;
    }
}
