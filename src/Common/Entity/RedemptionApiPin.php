<?php

namespace AllDigitalRewards\RewardStack\Common\Entity;

class RedemptionApiPin extends AbstractEntity
{
    protected $id;
    protected $pin;
    protected $uuid;
    protected $transaction_guid;
    protected $claimed_on;
    protected $exported_at;
    protected $created_at;
    protected $updated_at;
    protected $active;
    protected $exported;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPin()
    {
        return $this->pin;
    }

    /**
     * @param mixed $pin
     */
    public function setPin($pin): void
    {
        $this->pin = $pin;
    }

    /**
     * @return mixed
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @param mixed $uuid
     */
    public function setUuid($uuid): void
    {
        $this->uuid = $uuid;
    }

    /**
     * @return mixed
     */
    public function getTransactionGuid()
    {
        return $this->transaction_guid;
    }

    /**
     * @param mixed $transaction_guid
     */
    public function setTransactionGuid($transaction_guid): void
    {
        $this->transaction_guid = $transaction_guid;
    }

    /**
     * @return mixed
     */
    public function getClaimedOn()
    {
        return $this->claimed_on;
    }

    /**
     * @param mixed $claimed_on
     */
    public function setClaimedOn($claimed_on): void
    {
        $this->claimed_on = $claimed_on;
    }

    /**
     * @return mixed
     */
    public function getExportedAt()
    {
        return $this->exported_at;
    }

    /**
     * @param mixed $exported_at
     */
    public function setExportedAt($exported_at): void
    {
        $this->exported_at = $exported_at;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at): void
    {
        $this->updated_at = $updated_at;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param mixed $active
     */
    public function setActive($active): void
    {
        $this->active = $active;
    }

    /**
     * @return mixed
     */
    public function getExported()
    {
        return $this->exported;
    }

    /**
     * @param mixed $exported
     */
    public function setExported($exported): void
    {
        $this->exported = $exported;
    }
}
