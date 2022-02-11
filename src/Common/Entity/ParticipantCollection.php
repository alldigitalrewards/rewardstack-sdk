<?php


namespace AllDigitalRewards\RewardStack\Common\Entity;

use AllDigitalRewards\LanguageMapper\LanguageMapper;

class ParticipantCollection extends AbstractEntity
{

    protected $email_address;
    protected $unique_id;
    protected $credit;
    protected $firstname;
    protected $lastname;
    protected $phone;
    protected $active;
    protected $status;
    protected $created_at;
    protected $updated_at;
    protected $address;
    protected $program;
    protected $organization;
    protected $language;

    /**
     * @return mixed
     */
    public function getEmailAddress()
    {
        return $this->email_address;
    }

    /**
     * @param mixed $email_address
     */
    public function setEmailAddress($email_address)
    {
        $this->email_address = $email_address;
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
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * @param mixed $credit
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
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
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getProgram()
    {
        return $this->program;
    }

    /**
     * @param mixed $program
     */
    public function setProgram($program)
    {
        $this->program = $program;
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
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param mixed $language
     */
    public function setLanguage($language): void
    {
        $language = $language ?? LanguageMapper::DEFAULT_LANGUAGE;
        $this->language = (new LanguageMapper($language))->getLanguage();
    }
}
