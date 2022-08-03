<?php

namespace AllDigitalRewards\RewardStack\Program;

use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;

class MetricsRequest extends AbstractApiRequest
{
    protected $httpMethod = 'GET';

    public function __construct(protected string $programId)
    {
    }

    public function getHttpEndpoint(): string
    {
        return '/api/program/' . $this->programId . '/metrics';
    }

    public function getQueryParams(): string
    {
        return '';
    }

    public function getResponseObject(): AbstractEntity
    {
        return new MetricsResponse();
    }

    public function jsonSerialize()
    {
        return [];
    }
}