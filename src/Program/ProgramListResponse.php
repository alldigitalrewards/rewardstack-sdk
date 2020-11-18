<?php

namespace AllDigitalRewards\RewardStack\Program;

use AllDigitalRewards\RewardStack\Common\AbstractCollectionApiResponse;
use AllDigitalRewards\RewardStack\Common\Entity\ProgramRetrieve;

class ProgramListResponse extends AbstractCollectionApiResponse
{
    protected function getEntityClass(): string
    {
        return ProgramRetrieve::class;
    }
}
