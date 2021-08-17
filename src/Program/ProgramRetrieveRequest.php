<?php

namespace AllDigitalRewards\RewardStack\Program;

use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;

class ProgramRetrieveRequest extends AbstractApiRequest
{
    protected $httpMethod = 'GET';

    protected $searchParam;

    public function __construct($searchParam)
    {
        $this->searchParam = $searchParam;
    }

    public function getHttpEndpoint(): string
    {
        return '/api/program/' . $this->searchParam;
    }


    public function getResponseObject(): AbstractEntity
    {
        return new ProgramRetrieveResponse();
    }

    public function jsonSerialize()
    {
        return [];
    }
}
