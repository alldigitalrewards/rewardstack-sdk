<?php

namespace AllDigitalRewards\RewardStack\Transaction;

use AllDigitalRewards\RewardStack\Common\AbstractCollectionFilter;

class TransactionCollectionFilter extends AbstractCollectionFilter
{
    private $year;

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
           'year' => $this->getYear(),
        ];
    }
}
