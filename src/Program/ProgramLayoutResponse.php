<?php

namespace AllDigitalRewards\RewardStack\Program;

use AllDigitalRewards\RewardStack\Common\AbstractCollectionApiResponse;
use AllDigitalRewards\RewardStack\Common\Entity\ProgramLayout;

class ProgramLayoutResponse extends AbstractCollectionApiResponse
{

    protected function getEntityClass(): string
    {
        return ProgramLayout::class;
    }
}
