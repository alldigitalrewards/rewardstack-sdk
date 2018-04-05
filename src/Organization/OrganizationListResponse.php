<?php

namespace AllDigitalRewards\RewardStack\Organization;

use AllDigitalRewards\RewardStack\Common\Entity\Organization;
use AllDigitalRewards\RewardStack\Common\AbstractCollectionApiResponse;

class OrganizationListResponse extends AbstractCollectionApiResponse
{
    protected function getEntityClass(): string
    {
        return Organization::class;
    }
}
