<?php

namespace AllDigitalRewards\RewardStack\Response;

use AllDigitalRewards\RewardStack\Common\Entity\Participant;

class ParticipantCollectionResponse extends AbstractCollectionApiResponse
{
    protected function getEntityClass(): string
    {
        return Participant::class;
    }
}
