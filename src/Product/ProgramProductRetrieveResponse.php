<?php

namespace AllDigitalRewards\RewardStack\Product;

use AllDigitalRewards\RewardStack\Common\AbstractCollectionApiResponse;
use AllDigitalRewards\RewardStack\Common\Entity\ProgramProduct;

class ProgramProductRetrieveResponse extends AbstractCollectionApiResponse
{
    protected function getEntityClass(): string
    {
        return ProgramProduct::class;
    }
}
