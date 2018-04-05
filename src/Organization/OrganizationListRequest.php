<?php

namespace AllDigitalRewards\RewardStack\Organization;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApirequest;

class OrganizationListRequest extends AbstractApiRequest
{
    protected $httpMethod = 'GET';


    public function getHttpEndpoint(): string
    {
        return '/api/organization';
    }

    public function getResponseObject(): AbstractEntity
    {
        return new OrganizationListResponse();
    }

    public function jsonSerialize()
    {
        return [];
    }
}
