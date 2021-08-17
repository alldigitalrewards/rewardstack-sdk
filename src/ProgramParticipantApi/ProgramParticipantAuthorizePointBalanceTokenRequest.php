<?php

namespace AllDigitalRewards\RewardStack\ProgramParticipantApi;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;

class ProgramParticipantAuthorizePointBalanceTokenRequest extends AbstractApiRequest
{
    private $program;
    private $uuid;
    private $amount;

    protected $httpMethod = 'GET';

    public function __construct(string $program, string $uuid, $amount)
    {
        $this->program = $program;
        $this->uuid = $uuid;
        $this->amount = $amount;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/pps/$this->program/$this->uuid/authorize";
    }

    public function getResponseObject(): AbstractEntity
    {
        return new ProgramParticipantAuthIdResponse();
    }

    public function jsonSerialize()
    {
        return [
            'amount' => $this->amount
        ];
    }
}
