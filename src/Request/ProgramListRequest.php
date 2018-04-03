<?php

namespace AllDigitalRewards\RewardStack\Request;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Response\ProgramListResponse;

class ProgramListRequest extends AbstractApiRequest
{
    protected $httpMethod = 'GET';


    public function getHttpEndpoint(): string
    {
        return '/api/program/sharecare';
    }

    public function getResponseObject(): AbstractEntity
    {
        return new ProgramListResponse();
    }

    public function jsonSerialize()
    {
        return [];
    }
}
