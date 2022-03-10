<?php

namespace AllDigitalRewards\RewardStack\Common\Entity;

class TransactionProduct extends AbstractEntity
{
    protected $name;
    protected $sku;
    protected $quantity;
    protected $total;
    protected $points;
    protected $guid;
    protected $reissue_date;
    protected $terms_approved;
    protected $is_digital;
    protected $vendor;
    protected $returned;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param mixed $sku
     */
    public function setSku($sku): void
    {
        $this->sku = $sku;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total): void
    {
        $this->total = $total;
    }

    /**
     * @return mixed
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @param mixed $points
     */
    public function setPoints($points): void
    {
        $this->points = $points;
    }

    /**
     * @return mixed
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * @param mixed $guid
     */
    public function setGuid($guid): void
    {
        $this->guid = $guid;
    }

    /**
     * @return mixed
     */
    public function getReissueDate()
    {
        return $this->reissue_date;
    }

    /**
     * @param mixed $reissue_date
     */
    public function setReissueDate($reissue_date): void
    {
        $this->reissue_date = $reissue_date;
    }

    /**
     * @return mixed
     */
    public function getTermsApproved()
    {
        return $this->terms_approved;
    }

    /**
     * @param mixed $terms_approved
     */
    public function setTermsApproved($terms_approved): void
    {
        $this->terms_approved = $terms_approved;
    }

    /**
     * @return mixed
     */
    public function getIsDigital()
    {
        return $this->is_digital;
    }

    /**
     * @param mixed $is_digital
     */
    public function setIsDigital($is_digital): void
    {
        $this->is_digital = $is_digital;
    }

    /**
     * @return mixed
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * @param mixed $vendor
     */
    public function setVendor($vendor): void
    {
        $this->vendor = $vendor;
    }

    /**
     * @return bool
     */
    public function isReturned(): bool
    {
        return $this->returned == true;
    }

    /**
     * @param mixed $returned
     */
    public function setReturned($returned): void
    {
        $this->returned = $returned;
    }
}
