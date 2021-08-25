<?php

namespace AllDigitalRewards\RewardStack\AVS;

use AllDigitalRewards\CountryMapper\CountryMapperException;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\Entity\AvsAddress;
use AllDigitalRewards\RewardStack\Common\Entity\SuccessResponse;
use AllDigitalRewards\CountryMapper\CountryInputMapperService;
use Exception;

class AddressValidationRequest extends AbstractApiRequest
{
    private $address;

    protected $httpMethod = 'POST';

    public function __construct(AvsAddress $addressRequest)
    {
        $this->address = $addressRequest;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/avs/v2";
    }

    public function getResponseObject(): AbstractEntity
    {
        return new SuccessResponse();
    }

    /**
     * @throws Exception
     */
    public function jsonSerialize()
    {
        try {
            $this->getMappedCountry($this->address->getCountry());
        } catch (CountryMapperException $exception) {
            throw new Exception($exception->getMessage());
        }
        return $this->address->toArray();
    }
}
