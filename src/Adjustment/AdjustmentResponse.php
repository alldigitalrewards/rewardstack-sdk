<?php

namespace AllDigitalRewards\RewardStack\Adjustment;

use AllDigitalRewards\RewardStack\Common\Entity\Adjustment;
use AllDigitalRewards\RewardStack\Common\AbstractCollectionApiResponse;

class AdjustmentResponse extends AbstractCollectionApiResponse
{
    protected function getEntityClass(): string
    {
        return Adjustment::class;
    }
}
