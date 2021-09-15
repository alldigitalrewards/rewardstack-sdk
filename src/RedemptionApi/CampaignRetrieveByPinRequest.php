<?php

namespace AllDigitalRewards\RewardStack\RedemptionApi;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;

class CampaignRetrieveByPinRequest extends AbstractApiRequest
{
    private $pin;

    protected $httpMethod = 'GET';

    public function __construct(string $pin)
    {
        $this->pin = $pin;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/redemption-campaigns/pin/$this->pin";
    }

    public function getQueryParams(): string
    {
        return 'lang=' . $this->getLang();
    }

    public function getResponseObject(): AbstractEntity
    {
        return new SingleCampaignFromListResponse();
    }

    public function jsonSerialize()
    {
        return [];
    }
}
