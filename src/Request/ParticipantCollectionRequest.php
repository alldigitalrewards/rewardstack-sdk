<?php

namespace AllDigitalRewards\RewardStack\Request;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Response\ParticipantCollectionResponse;

class ParticipantCollectionRequest extends AbstractApiRequest
{
    protected $httpEndpoint = '/api/user';

    public function getResponseObject(): AbstractEntity
    {
        return new ParticipantCollectionResponse();
    }

    public function jsonSerialize()
    {
        return [];
    }
}
