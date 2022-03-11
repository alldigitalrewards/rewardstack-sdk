<?php

namespace AllDigitalRewards\RewardStack\Transaction;

use AllDigitalRewards\RewardStack\Common\AbstractCollectionFilter;

class TransactionItemCollectionFilter extends TransactionCollectionFilter
{
    private $incentiveType;

    /**
     * @return mixed
     */
    public function getIncentiveType()
    {
        return $this->incentiveType;
    }

    /**
     * @param mixed $incentiveType
     */
    public function setIncentiveType($incentiveType): void
    {
        $this->incentiveType = $incentiveType;
    }

    public function getFilterArray(): array
    {
        return [
           'incentive_type' => $this->getIncentiveType(),
           'year' => $this->getYear(),
        ];
    }
}
