<?php

namespace AllDigitalRewards\RewardStack\ProgramParticipantApi;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use AllDigitalRewards\RewardStack\Participant\ParticipantResponse;

class ProgramParticipantPiiRequest extends AbstractApiRequest
{
    private $program;
    private $uuid;

    protected $httpMethod = 'GET';

    public function __construct(string $program, string $uuid)
    {
        $this->program = $program;
        $this->uuid = $uuid;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/pps/$this->program/$this->uuid";
    }

    public function getResponseObject(): AbstractEntity
    {
        return new ParticipantResponse();
    }

    public function jsonSerialize()
    {
        return [];
    }
}
