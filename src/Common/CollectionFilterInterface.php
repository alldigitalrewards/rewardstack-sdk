<?php

namespace AllDigitalRewards\RewardStack\Common;

interface CollectionFilterInterface
{
    public function getFilterArray(): array;

    public function getQueryString(): string;
}
