<?php

namespace AllDigitalRewards\RewardStack\ProgramParticipantApi;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use AllDigitalRewards\RewardStack\Common\Entity\SuccessResponse;

class ProgramParticipantCaptureTransactionRequest extends AbstractApiRequest
{
    private $program;
    private $uuid;
    private $authorizationId;
    private $amount;
    private $transactionId;

    protected $httpMethod = 'GET';

    public function __construct(
        string $program,
        string $uuid,
        string $authorizationId,
        $amount,
        $transactionId
    ) {
        $this->program = $program;
        $this->uuid = $uuid;
        $this->authorizationId = $authorizationId;
        $this->amount = $amount;
        $this->transactionId = $transactionId;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/pps/$this->program/$this->uuid/capture";
    }

    public function getResponseObject(): AbstractEntity
    {
        return new SuccessResponse();
    }

    public function jsonSerialize()
    {
        return [
            'authorization_id' => $this->authorizationId,
            'amount' => $this->amount,
            'transaction_id' => $this->transactionId
        ];
    }
}
