<?php

namespace AllDigitalRewards\RewardStack\Share;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;

/**
 * Response from a successful point sharing operation.
 *
 * Contains the sharer's updated credit after the transfer.
 */
class SharePointsResponse extends AbstractEntity
{
    /**
     * @var float
     */
    protected $credit;

    /**
     * @var float
     */
    protected $shared_credit;

    /**
     * Get the sharer's remaining earned (non-shareable) credit.
     *
     * @return float
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * @param float $credit
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;
    }

    /**
     * Get the sharer's remaining shared credit.
     *
     * @return float
     */
    public function getSharedCredit()
    {
        return $this->shared_credit;
    }

    /**
     * @param float $shared_credit
     */
    public function setSharedCredit($shared_credit)
    {
        $this->shared_credit = $shared_credit;
    }

    /**
     * Get the total remaining credit (credit + shared_credit).
     *
     * @return float
     */
    public function getTotalCredit(): float
    {
        return (float)$this->credit + (float)$this->shared_credit;
    }
}
