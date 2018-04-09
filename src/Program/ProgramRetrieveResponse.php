<?php


namespace AllDigitalRewards\RewardStack\Program;

use AllDigitalRewards\RewardStack\Common\Entity\ProgramRetrieve;
use AllDigitalRewards\RewardStack\Common\AbstractCollectionApiResponse;

class ProgramRetrieveResponse extends AbstractCollectionApiResponse
{

    protected function getEntityClass(): string
    {
        return ProgramRetrieve::class;
    }
}
