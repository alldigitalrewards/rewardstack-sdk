<?php


namespace AllDigitalRewards\RewardStack\Common\Entity;

class Program extends AbstractEntity
{
    protected $unique_id;
    protected $name;
    protected $point;
    protected $url;
    protected $logo;
    protected $published;
    protected $meta;
    protected $cost_center_id;
    protected $active;
    protected $updated_at;
    protected $created_at;
    protected $organization;
    protected $contact;
    protected $productCriteria;
    protected $featured_products;
    protected $auto_redemption;
    protected $collect_ssn;
    protected $end_date;
    protected $enable_email_login;

    /**
     * @return mixed
     */
    public function getUniqueId()
    {
        return $this->unique_id;
    }

    /**
     * @param mixed $unique_id
     */
    public function setUniqueId($unique_id)
    {
        $this->unique_id = $unique_id;
    }

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
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * @param mixed $point
     */
    public function setPoint($point)
    {
        $this->point = $point;
    }

    /**
     * @return mixed
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param mixed $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    /**
     * @return mixed
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * @param mixed $published
     */
    public function setPublished($published)
    {
        $this->published = $published;
    }

    /**
     * @return mixed
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * @param mixed $meta
     */
    public function setMeta($meta)
    {
        $this->meta = $meta;
    }

    /**
     * @return mixed
     */
    public function getCostCenterId()
    {
        return $this->cost_center_id;
    }

    /**
     * @param mixed $cost_center_id
     */
    public function setCostCenterId($cost_center_id)
    {
        $this->cost_center_id = $cost_center_id;
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
    public function setActive($active)
    {
        $this->active = $active;
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
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
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
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @param mixed $organization
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
    }

    /**
     * @return mixed
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param mixed $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return mixed
     */
    public function getProductCriteria()
    {
        return $this->productCriteria;
    }

    /**
     * @param mixed $productCriteria
     */
    public function setProductCriteria($productCriteria)
    {
        $this->productCriteria = $productCriteria;
    }

    /**
     * @return mixed
     */
    public function getFeaturedProducts()
    {
        return $this->featured_products;
    }

    /**
     * @param mixed $featured_products
     */
    public function setFeaturedProducts($featured_products)
    {
        $this->featured_products = $featured_products;
    }

    /**
     * @return mixed
     */
    public function getAutoRedemption()
    {
        return $this->auto_redemption;
    }

    /**
     * @param mixed $auto_redemption
     */
    public function setAutoRedemption($auto_redemption)
    {
        $this->auto_redemption = $auto_redemption;
    }

    /**
     * @return mixed
     */
    public function getCollectSsn()
    {
        return $this->collect_ssn;
    }

    /**
     * @param mixed $collect_ssn
     */
    public function setCollectSsn($collect_ssn)
    {
        $this->collect_ssn = $collect_ssn;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * @param mixed $end_date
     */
    public function setEndDate($end_date): void
    {
        $this->end_date = $end_date;
    }

    /**
     * @return mixed
     */
    public function getEnableEmailLogin()
    {
        return $this->enable_email_login;
    }

    /**
     * @param mixed $enable_email_login
     */
    public function setEnableEmailLogin($enable_email_login): void
    {
        $this->enable_email_login = $enable_email_login;
    }
}
