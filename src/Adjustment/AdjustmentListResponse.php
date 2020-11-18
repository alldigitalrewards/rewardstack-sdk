<?php

namespace AllDigitalRewards\RewardStack\Adjustment;

use AllDigitalRewards\RewardStack\Common\Entity\Adjustment;
use AllDigitalRewards\RewardStack\Common\AbstractCollectionApiResponse;

class AdjustmentListResponse extends AbstractCollectionApiResponse
{
    protected function getEntityClass(): string
    {
        return Adjustment::class;
    }
}
