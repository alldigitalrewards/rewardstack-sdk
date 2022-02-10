<?php

namespace AllDigitalRewards\RewardStack\Participant;

use AllDigitalRewards\RewardStack\Common\AbstractCollectionFilter;

class ParticipantCollectionFilter extends AbstractCollectionFilter
{
    //ACTIVE = 1;
    //HOLD = 2;
    //INACTIVE = 3;
    //CANCELLED = 4;
    //DATADEL = 5;
    private $statusFilter = '';

    /**
     * @return string
     */
    public function getStatusFilter(): string
    {
        return $this->statusFilter;
    }

    /**
     * @param string $statusFilter
     */
    public function setStatusFilter(string $statusFilter): void
    {
        $this->statusFilter = $statusFilter;
    }

    public function getFilterArray(): array
    {
        return [
            'status' => $this->statusFilter,
        ];
    }
}
