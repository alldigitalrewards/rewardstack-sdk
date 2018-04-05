<?php

namespace AllDigitalRewards\RewardStack\Transaction;

use AllDigitalRewards\RewardStack\Common\Entity\Transaction;
use AllDigitalRewards\RewardStack\Common\AbstractCollectionApiResponse;

class TransactionResponse extends AbstractCollectionApiResponse
{
    protected function getEntityClass(): string
    {
        return Transaction::class;
    }
}
