<?php

namespace AllDigitalRewards\RewardStack\Program;

use AllDigitalRewards\RewardStack\Common\AbstractCollectionFilter;

class ProgramCollectionFilter extends AbstractCollectionFilter
{
    public function getFilterArray(): array
    {
        return [
            'uniqueId' => $this->uniqueIdFilter,
            'name' => $this->nameFilter,
            'organization' => $this->organizationFilter
        ];
    }

    /**
     * @var array
     */
    private $uniqueIdFilter = [];

    private $organizationFilter = '';

    /**
     * @var string
     */
    private $nameFilter = '';

    /**
     * @param string $uniqueId
     */
    public function addUniqueIdFilter(string $uniqueId)
    {
        $this->uniqueIdFilter[] = $uniqueId;
    }

    /**
     * @return array
     */
    public function getUniqueIdFilter(): array
    {
        return $this->uniqueIdFilter;
    }

    /**
     * @param array $uniqueIdFilter
     */
    public function setUniqueIdFilter(array $uniqueIdFilter)
    {
        $this->uniqueIdFilter = $uniqueIdFilter;
    }

    /**
     * @return string
     */
    public function getOrganizationFilter(): string
    {
        return $this->organizationFilter;
    }

    /**
     * @param string $organizationFilter
     */
    public function setOrganizationFilter(string $organizationFilter)
    {
        $this->organizationFilter = $organizationFilter;
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
