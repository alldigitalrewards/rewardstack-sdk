<?php

namespace AllDigitalRewards\RewardStack\AVS;

use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\Entity\AvsAddress;
use AllDigitalRewards\RewardStack\Common\Entity\SuccessResponse;

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

    public function jsonSerialize()
    {
        return $this->address->toArray();
    }
}
