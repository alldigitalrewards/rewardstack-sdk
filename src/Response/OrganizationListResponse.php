<?php

namespace AllDigitalRewards\RewardStack\Response;

use AllDigitalRewards\RewardStack\Common\Entity\Organization;

class OrganizationListResponse extends AbstractCollectionApiResponse
{
    protected function getEntityClass(): string
    {
        return Organization::class;
    }
}
