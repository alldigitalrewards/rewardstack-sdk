<?php

namespace AllDigitalRewards\RewardStack\RedemptionApi;

use AllDigitalRewards\RewardStack\Common\AbstractCollectionApiResponse;
use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\Entity\RedemptionApiCampaign;

class SingleCampaignFromListResponse extends AbstractCollectionApiResponse
{

    public function hydrate($data): AbstractEntity
    {
        $collection = parent::hydrate($data);
        if (empty($collection) === false) {
            return $collection[0];
        }
        return $collection;
    }

    /**
     * @inheritDoc
     */
    protected function getEntityClass(): string
    {
        return RedemptionApiCampaign::class;
    }
}
