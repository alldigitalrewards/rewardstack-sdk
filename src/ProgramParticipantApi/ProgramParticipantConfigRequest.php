<?php

namespace AllDigitalRewards\RewardStack\ProgramParticipantApi;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;

class ProgramParticipantConfigRequest extends AbstractApiRequest
{
    private $program;

    protected $httpMethod = 'GET';

    public function __construct(string $program)
    {
        $this->program = $program;
    }

    public function getHttpEndpoint(): string
    {
        return '/api/pps/' . $this->program ;
    }

    public function getResponseObject(): AbstractEntity
    {
        return new ProgramParticipantConfigResponse();
    }

    public function jsonSerialize()
    {
        return [];
    }
}
