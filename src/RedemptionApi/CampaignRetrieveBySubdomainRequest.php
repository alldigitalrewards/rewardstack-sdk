<?php

namespace AllDigitalRewards\RewardStack\RedemptionApi;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;

class CampaignRetrieveBySubdomainRequest extends AbstractApiRequest
{
    private $subDomain;

    protected $httpMethod = 'GET';

    public function __construct(string $subDomain)
    {
        $this->subDomain = $subDomain;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/redemption-campaigns/$this->subDomain";
    }

    public function getQueryParams(): string
    {
        return 'lang=' . $this->getLang();
    }

    public function getResponseObject(): AbstractEntity
    {
        //sadly I built the api to return the entity in an array so
        //im overriding the hydration to pop off first from the list
        return new SingleCampaignFromListResponse();
    }

    public function jsonSerialize()
    {
        return [];
    }
}
