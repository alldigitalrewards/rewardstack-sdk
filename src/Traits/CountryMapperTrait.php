<?php

namespace AllDigitalRewards\RewardStack\Traits;

use AllDigitalRewards\CountryMapper\CountryInputMapperService;
use AllDigitalRewards\CountryMapper\CountryMapperException;
use AllDigitalRewards\CountryMapper\Entity\Country;

trait CountryMapperTrait
{
    /**
     * Use the mapping because the SDK passes different types when validating after setting
     * @throws CountryMapperException
     */
    public function getMappedCountry($input): Country
    {
        $service = new CountryInputMapperService();
        $country = $service->getMappedCountry($input);
        $this->validateCountry($country->getAlpha2());
        return $country;
    }

    /**
     * @throws CountryMapperException
     */
    public function validateCountry($alpha)
    {
        $service = new CountryInputMapperService();
        $service->getWhitelistedAlpha2($alpha);
    }
}
