<?php

namespace AllDigitalRewards\RewardStack\Organization;

use AllDigitalRewards\RewardStack\Common\AbstractCollectionFilter;

class OrganizationCollectionFilter extends AbstractCollectionFilter
{
    public function getFilterArray(): array
    {
        return [
            'parent' => $this->parentFilter,
            'name' => $this->nameFilter,
        ];
    }

    /**
     * @var string
     */
    private $parentFilter = '';

    /**
     * @var string
     */
    private $nameFilter = '';

    /**
     * @return string
     */
    public function getParentFilter(): string
    {
        return $this->parentFilter;
    }

    /**
     * @param string $parentFilter
     */
    public function setParentFilter(string $parentFilter)
    {
        $this->parentFilter = $parentFilter;
    }

    /**
     * @return string
     */
    public function getNameFilter(): string
    {
        return $this->nameFilter;
    }

    /**
     * @param string $nameFilter
     */
    public function setNameFilter(string $nameFilter)
    {
        $this->nameFilter = $nameFilter;
    }
}
