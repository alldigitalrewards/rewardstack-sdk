<?php

namespace AllDigitalRewards\RewardStack\Common\Entity;

class OrganizationReterive extends AbstractEntity
{
    private $name;
    private $unique_id;
    private $active;
    private $created_at;
    private $updated_at;
    private $parent;
    private $domains;
    private $company_contact;
    private $accounts_payable_contact;

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
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param mixed $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    /**
     * @return mixed
     */
    public function getDomains()
    {
        return $this->domains;
    }

    /**
     * @param mixed $domains
     */
    public function setDomains($domains)
    {
        $this->domains = $domains;
    }

    /**
     * @return mixed
     */
    public function getCompanyContact()
    {
        return $this->company_contact;
    }

    /**
     * @param mixed $company_contact
     */
    public function setCompanyContact($company_contact)
    {
        $this->company_contact = $company_contact;
    }

    /**
     * @return mixed
     */
    public function getAccountsPayableContact()
    {
        return $this->accounts_payable_contact;
    }

    /**
     * @param mixed $accounts_payable_contact
     */
    public function setAccountsPayableContact($accounts_payable_contact)
    {
        $this->accounts_payable_contact = $accounts_payable_contact;
    }
}
