<?php

namespace AllDigitalRewards\RewardStack\Ssn1099ParticipantApi;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use AllDigitalRewards\RewardStack\Common\Entity\SuccessResponse;

/**
 * When participants are checking out of a marketplace it will sum the total value of all transactions (In USD)
and if all transactions plus the sum of the current cart exceeds $599USD and the participant has not provided
a social security number then the participant will be prompted to provide a social security number.
 */
class Ssn1099ParticipantVerifyRequest extends AbstractApiRequest
{
    private $organization;
    private $program;
    private $uuid;

    protected $httpMethod = 'POST';

    public function __construct(string $organization, string $program, string $uuid)
    {
        $this->organization = $organization;
        $this->program = $program;
        $this->uuid = $uuid;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/ssn/verify";
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
            "participant" => $this->uuid
        ];
    }
}
