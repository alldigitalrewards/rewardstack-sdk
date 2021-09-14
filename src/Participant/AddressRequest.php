<?php

namespace AllDigitalRewards\RewardStack\Participant;

use AllDigitalRewards\CountryMapper\CountryInputMapperService;
use AllDigitalRewards\CountryMapper\CountryMapperException;
use AllDigitalRewards\CountryMapper\Entity\Country;
use AllDigitalRewards\RewardStack\Traits\CountryMapperTrait;
use Exception;

class AddressRequest
{
    use CountryMapperTrait;

    public $firstname;

    public $lastname;

    public $address1;

    public $address2;

    public $city;

    public $state;

    public $zip;

    public $country;

    public $country_code;

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
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @param mixed $address1
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
    }

    /**
     * @return mixed
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @param mixed $address2
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param mixed $zip
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param $country
     * @throws Exception
     */
    public function setCountry($country)
    {
        $this->country = $this->getNumericCountryCode($country);
    }

    /**
     * @param $country
     * @return string
     * @throws Exception
     */
    private function getNumericCountryCode($country): string
    {
        try {
            if (empty($country) === true) {
                $country = 'US';
            }
            $countryResponse = $this->getMappedCountry($country);
            $this->country_code = $countryResponse->getAlpha2();
            return $countryResponse->getNumeric();
        } catch (CountryMapperException $exception) {
            throw new Exception($exception->getMessage());
        }
    }
}
