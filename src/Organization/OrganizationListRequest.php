<?php

namespace AllDigitalRewards\RewardStack\Organization;

use AllDigitalRewards\RewardStack\Common\AbstractApiCollectionRequest;
use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;

class OrganizationListRequest extends AbstractApiCollectionRequest
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

    public function jsonSerialize(): array
    {
        return [];
    }
}
