<?php

namespace AllDigitalRewards\RewardStack\Request;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Response\ProgramLayoutResponse;

class ProgramLayoutRequest extends AbstractApiRequest
{
    protected $httpMethod = 'GET';


    public function getHttpEndpoint(): string
    {
        return '/api/program/sharecare/layout';
    }

    public function getResponseObject(): AbstractEntity
    {
        return new ProgramLayoutResponse();
    }

    public function jsonSerialize()
    {
        return [];
    }
}
