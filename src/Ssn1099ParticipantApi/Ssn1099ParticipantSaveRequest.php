<?php

namespace AllDigitalRewards\RewardStack\Ssn1099ParticipantApi;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use AllDigitalRewards\RewardStack\Common\Entity\SuccessResponse;

class Ssn1099ParticipantSaveRequest extends AbstractApiRequest
{
    private $organization;
    private $program;
    private $uuid;
    private $ssn;

    protected $httpMethod = 'POST';

    public function __construct(string $organization, string $program, string $uuid, string $ssn)
    {
        $this->organization = $organization;
        $this->program = $program;
        $this->uuid = $uuid;
        $this->ssn = $ssn;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/ssn";
    }

    public function getResponseObject(): AbstractEntity
    {
        return new SuccessResponse();
    }

    public function jsonSerialize()
    {
        return [
            "organization" => $this->organization,
            "program" => $this->program,
            "participant" => $this->uuid,
            "ssn" => $this->ssn,
        ];
    }
}
