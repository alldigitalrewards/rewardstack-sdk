<?php

namespace AllDigitalRewards\RewardStack\Transaction;

use AllDigitalRewards\RewardStack\Common\AbstractCollectionFilter;

class ParticipantTransactionCollectionFilter extends AbstractCollectionFilter
{
    private $year;
    private $incentiveType;

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
