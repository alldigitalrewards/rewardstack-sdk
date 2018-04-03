<?php

namespace AllDigitalRewards\RewardStack\Response;

use AllDigitalRewards\RewardStack\Common\Entity\Transaction;

class TransactionResponse extends AbstractCollectionApiResponse
{
    protected function getEntityClass(): string
    {
        return Transaction::class;
    }
}
