<?php

namespace AllDigitalRewards\RewardStack\Common;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Response\AbstractApiResponse;

abstract class AbstractApiRequest implements \JsonSerializable
{
    protected $httpEndpoint = '/';
    protected $httpMethod = 'GET';

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

    // Response Object:
    abstract public function getResponseObject(): AbstractEntity;
}
