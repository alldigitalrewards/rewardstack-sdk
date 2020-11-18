<?php

namespace AllDigitalRewards\RewardStack\Program;

use AllDigitalRewards\RewardStack\Common\AbstractApiCollectionRequest;
use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;

class ProgramListRequest extends AbstractApiCollectionRequest
{
    public function getHttpEndpoint(): string
    {
        return '/api/program';
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
