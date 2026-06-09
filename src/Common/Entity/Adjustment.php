<?php


namespace AllDigitalRewards\RewardStack\Common\Entity;

class Adjustment extends AbstractEntity
{
    protected $amount;
    protected $type;
    protected $transaction_id;
    protected $transaction_item_id;
    protected $completed_at;
    protected $activity;
    protected $reference;
    protected $description;
    protected $shareable;
    protected $id;
    protected $created_at;
    protected $updated_at;

    /**
     * @return float|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float|null $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
    }

    /**
     * @param string|null $transaction_id
     */
    public function setTransactionId($transaction_id)
    {
        $this->transaction_id = $transaction_id;
    }

    /**
     * @return string|null
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string|null $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param string|null $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param string|null $updated_at
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }

    /**
     * @return string|null
     */
    public function getTransactionItemId()
    {
        return $this->transaction_item_id;
    }

    /**
     * @param string|null $transaction_item_id
     */
    public function setTransactionItemId($transaction_item_id)
    {
        $this->transaction_item_id = $transaction_item_id;
    }

    /**
     * @return string|null
     */
    public function getCompletedAt()
    {
        return $this->completed_at;
    }

    /**
     * @param string|null $completed_at
     */
    public function setCompletedAt($completed_at)
    {
        $this->completed_at = $completed_at;
    }

    /**
     * @return string|null
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * @param string|null $activity
     */
    public function setActivity($activity)
    {
        $this->activity = $activity;
    }

    /**
     * Get whether this adjustment affects shareable points.
     *
     * @return int|null
     */
    public function getShareable()
    {
        return $this->shareable;
    }

    /**
     * @param int|null $shareable
     */
    public function setShareable($shareable)
    {
        $this->shareable = $shareable;
    }

    public function isShareable(): bool
    {
        return $this->shareable == 1;
    }
}
