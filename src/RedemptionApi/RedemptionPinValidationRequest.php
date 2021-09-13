<?php

namespace AllDigitalRewards\RewardStack\RedemptionApi;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use AllDigitalRewards\RewardStack\Common\Entity\SuccessResponse;
use AllDigitalRewards\RewardStack\Participant\ParticipantResponse;

class RedemptionPinValidationRequest extends AbstractApiRequest
{
    private $subDomain;
    private $pin;

    protected $httpMethod = 'GET';

    public function __construct(string $subDomain, string $pin)
    {
        $this->subDomain = $subDomain;
        $this->pin = $pin;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/redemption-campaigns/$this->subDomain/pins/$this->pin";
    }

    public function getQueryParams(): string
    {
        return 'lang=' . $this->getLang();
    }

    public function getResponseObject(): AbstractEntity
    {
        return new RedemptionApiPinResponse();
    }

    public function jsonSerialize()
    {
        return [];
    }
}
