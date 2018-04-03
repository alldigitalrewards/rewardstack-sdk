<?php

namespace AllDigitalRewards\RewardStack\Response;

use AllDigitalRewards\RewardStack\Common\Entity\Domains;

class OrganizationDomainsResponse extends AbstractCollectionApiResponse
{
    protected function getEntityClass(): string
    {
        return Domains::class;
    }
}
