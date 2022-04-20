<?php

namespace AllDigitalRewards\RewardStack\Common;

use AllDigitalRewards\RewardStack\Common\Entity\OrderBy;

abstract class AbstractCollectionFilter implements CollectionFilterInterface
{
    /**
     * @var OrderBy|null
     */
    private $orderBy;

    /**
     * @return OrderBy|null
     */
    public function getOrderBy(): ?OrderBy
    {
        return $this->orderBy;
    }

    /**
     * @param OrderBy|null $orderBy
     */
    public function setOrderBy(?OrderBy $orderBy): void
    {
        $this->orderBy = $orderBy;
    }

    public function getQueryString(): string
    {
        return http_build_query(
            array_merge($this->getFilterArray(), $this->hydrateOrderByIfSet())
        );
    }

    protected function hydrateOrderByIfSet(): array
    {
        $filter = [];
        $orderBy = $this->getOrderBy();
        if ($orderBy instanceof OrderBy
            && empty($orderBy->getField()) === false
            && empty(trim($orderBy->getField())) === false
        ) {
            $filter['orderBy[field]'] = trim($orderBy->getField());
            $filter['orderBy[direction]'] = $orderBy->getDirection();
        }
        return $filter;
    }
}
