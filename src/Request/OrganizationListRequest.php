<?php

namespace AllDigitalRewards\RewardStack\Request;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Response\OrganizationListResponse;

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
