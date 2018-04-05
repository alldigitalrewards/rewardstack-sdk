<?php

namespace AllDigitalRewards\RewardStack\Request;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Response\ProgramListResponse;

class ProgramListRequest extends AbstractApiRequest
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
        return new ProgramListResponse();
    }

    public function jsonSerialize()
    {
        return [];
    }
}
