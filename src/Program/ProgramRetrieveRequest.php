<?php

namespace AllDigitalRewards\RewardStack\Program;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApirequest;

class ProgramRetrieveRequest extends AbstractApiRequest
{
    protected $httpMethod = 'GET';


    public function getHttpEndpoint(): string
    {
        return '/api/program';
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
