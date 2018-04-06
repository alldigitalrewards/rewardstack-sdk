<?php

namespace AllDigitalRewards\RewardStack\Organization;

use AllDigitalRewards\RewardStack\Common\Entity\Domains;
use AllDigitalRewards\RewardStack\Common\AbstractCollectionApiResponse;

class OrganizationDomainsResponse extends AbstractCollectionApiResponse
{
    protected function getEntityClass(): string
    {
        return Domains::class;
    }
}
