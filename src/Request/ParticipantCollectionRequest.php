<?php

namespace AllDigitalRewards\RewardStack\Request;

use AllDigitalRewards\RewardStack\Response\AbstractApiResponse;
use AllDigitalRewards\RewardStack\Response\ParticipantCollectionResponse;

class ParticipantCollectionRequest extends AbstractApiRequest
{
    protected $httpEndpoint = '/api/user';

    public function getResponseObject(): AbstractApiResponse
    {
        return new ParticipantCollectionResponse();
    }

    public function jsonSerialize()
    {
        return [];
    }
}
