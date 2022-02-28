<?php

namespace AllDigitalRewards\RewardStack\Program;

use AllDigitalRewards\RewardStack\Common\AbstractCollectionFilter;
use DateTime;
use Exception;

class ProgramCollectionFilter extends AbstractCollectionFilter
{
    public function getFilterArray(): array
    {
        return [
            'uniqueId' => $this->uniqueIdFilter,
            'name' => $this->nameFilter,
            'organization' => $this->organizationFilter,
            'active' => $this->activeFilter,
            'end_date' => $this->endDateFilter,
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

    private $activeFilter = '';

    private $endDateFilter = '';

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

    /**
     * @return string
     */
    public function getActiveFilter(): string
    {
        return $this->activeFilter;
    }

    /**
     * @param string $activeFilter
     */
    public function setActiveFilter(string $activeFilter): void
    {
        $this->activeFilter = $activeFilter;
    }

    /**
     * @return string
     */
    public function getEndDateFilter(): string
    {
        return $this->endDateFilter;
    }

    /**
     * @param string $endDateFilter
     * @throws Exception
     */
    public function setEndDateFilter(string $endDateFilter): void
    {
        if (empty($endDateFilter) === true
            || DateTime::createFromFormat('Y-m-d', $endDateFilter) === false) {
            throw new Exception('End Date must be valid Y-m-d format');
        }
        $this->endDateFilter = $endDateFilter;
    }
}
