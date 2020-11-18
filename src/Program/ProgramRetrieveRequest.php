<?php

namespace AllDigitalRewards\RewardStack\Program;

use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;

class ProgramRetrieveRequest extends AbstractApiRequest
{
    protected $httpMethod = 'GET';

    protected $uniqueId;

    public function __construct($uniqueId)
    {
        $this->uniqueId = $uniqueId;
    }

    public function getHttpEndpoint(): string
    {
        return '/api/program/' . $this->uniqueId;
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
