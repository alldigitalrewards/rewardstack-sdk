<?php

namespace AllDigitalRewards\RewardStack\Common;

abstract class AbstractCollectionFilter implements CollectionFilterInterface
{
    public function getQueryString(): string
    {
        return http_build_query(
            $this->getFilterArray()
        );
    }
}
