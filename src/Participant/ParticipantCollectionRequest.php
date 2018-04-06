<?php

namespace AllDigitalRewards\RewardStack\Participant;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApirequest;

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
