<?php

namespace AllDigitalRewards\RewardStack\Program;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;

class MetricsResponse extends AbstractEntity
{
    protected int $participant_total;
    protected int $transaction_total;
    protected int $adjustment_total;

    /**
     * @return int
     */
    public function getParticipantTotal(): int
    {
        return $this->participant_total;
    }

    /**
     * @param int $participant_total
     */
    public function setParticipantTotal(int $participant_total): void
    {
        $this->participant_total = $participant_total;
    }

    /**
     * @return int
     */
    public function getTransactionTotal(): int
    {
        return $this->transaction_total;
    }

    /**
     * @param int $transaction_total
     */
    public function setTransactionTotal(int $transaction_total): void
    {
        $this->transaction_total = $transaction_total;
    }

    /**
     * @return int
     */
    public function getAdjustmentTotal(): int
    {
        return $this->adjustment_total;
    }

    /**
     * @param int $adjustment_total
     */
    public function setAdjustmentTotal(int $adjustment_total): void
    {
        $this->adjustment_total = $adjustment_total;
    }
}
