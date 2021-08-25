<?php

namespace AllDigitalRewards\RewardStack\Common;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Traits\CountryMapperTrait;
use AllDigitalRewards\RewardStack\Traits\LanguageHydrationTrait;

abstract class AbstractApiRequest implements \JsonSerializable
{
    use CountryMapperTrait;
    use LanguageHydrationTrait;
    protected $httpEndpoint = '/';
    protected $httpMethod = 'GET';
    protected $queryParams = '';

    // Endpoint: /api/user
    public function getHttpEndpoint(): string
    {
        return $this->httpEndpoint;
    }

    // Method: GET
    public function getHttpMethod(): string
    {
        return $this->httpMethod;
    }

    // Params
    public function getQueryParams(): string
    {
        return $this->queryParams;
    }

    // Response Object:
    abstract public function getResponseObject(): AbstractEntity;
}
