<?php

namespace AllDigitalRewards\RewardStack\Response;

use AllDigitalRewards\RewardStack\Common\Entity\Adjustment;

class AdjustmentResponse extends AbstractCollectionApiResponse
{
    protected function getEntityClass(): string
    {
        return Adjustment::class;
    }
}
