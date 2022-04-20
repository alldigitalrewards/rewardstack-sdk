<?php

namespace AllDigitalRewards\RewardStack\Transaction;

use AllDigitalRewards\RewardStack\Common\AbstractCollectionFilter;

class TransactionItemCollectionFilter extends AbstractCollectionFilter
{
    private $incentiveType;
    private $year;

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

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year): void
    {
        $this->year = $year;
    }

    public function getFilterArray(): array
    {
        return [
           'incentive_type' => $this->getIncentiveType(),
           'year' => $this->getYear(),
        ];
    }
}
