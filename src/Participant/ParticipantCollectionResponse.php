<?php

namespace AllDigitalRewards\RewardStack\Participant;

use AllDigitalRewards\RewardStack\Common\Entity\Participant;
use AllDigitalRewards\RewardStack\Common\AbstractCollectionApiResponse;

class ParticipantCollectionResponse extends AbstractCollectionApiResponse
{
    protected function getEntityClass(): string
    {
        return Participant::class;
    }
}
