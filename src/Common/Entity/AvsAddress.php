<?php

namespace AllDigitalRewards\RewardStack\Common\Entity;

class AvsAddress extends AbstractEntity
{
    protected $address1 = '';
    protected $address2 = '';
    protected $city = '';
    protected $state = '';
    protected $postal_code = '';
    protected $country = '840';

    /**
     * @return string
     */
    public function getAddress1(): string
    {
        return $this->address1;
    }

    /**
     * @param string $address1
     */
    public function setAddress1(string $address1): void
    {
        $this->address1 = $address1;
    }

    /**
     * @return string
     */
    public function getAddress2(): string
    {
        return $this->address2;
    }

    /**
     * @param string $address2
     */
    public function setAddress2(string $address2): void
    {
        $this->address2 = $address2;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postal_code;
    }

    /**
     * @param string $postal_code
     */
    public function setPostalCode(string $postal_code): void
    {
        $this->postal_code = $postal_code;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country ?? '';
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }
}
