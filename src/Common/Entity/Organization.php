<?php


namespace AllDigitalRewards\RewardStack\Common\Entity;

class Organization extends AbstractEntity
{
    private $name;
    private $unique_id;
    private $accounts_payable_contact_reference;
    private $company_contact_reference;
    private $active;
    private $created_at;
    private $updated_at;
    private $program_count;
    private $parent;

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
    public function getAccountsPayableContactReference()
    {
        return $this->accounts_payable_contact_reference;
    }

    /**
     * @param mixed $accounts_payable_contact_reference
     */
    public function setAccountsPayableContactReference($accounts_payable_contact_reference)
    {
        $this->accounts_payable_contact_reference = $accounts_payable_contact_reference;
    }

    /**
     * @return mixed
     */
    public function getCompanyContactReference()
    {
        return $this->company_contact_reference;
    }

    /**
     * @param mixed $company_contact_reference
     */
    public function setCompanyContactReference($company_contact_reference)
    {
        $this->company_contact_reference = $company_contact_reference;
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
    public function getProgramCount()
    {
        return $this->program_count;
    }

    /**
     * @param mixed $program_count
     */
    public function setProgramCount($program_count)
    {
        $this->program_count = $program_count;
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
}
