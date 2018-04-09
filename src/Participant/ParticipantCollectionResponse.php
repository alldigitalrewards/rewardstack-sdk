<?php

namespace AllDigitalRewards\RewardStack\Participant;

use AllDigitalRewards\RewardStack\Common\AbstractCollectionApiResponse;
use AllDigitalRewards\RewardStack\Common\Entity\ParticipantCollection;

class ParticipantCollectionResponse extends AbstractCollectionApiResponse
{
    protected function getEntityClass(): string
    {
        return ParticipantCollection::class;
    }
}
