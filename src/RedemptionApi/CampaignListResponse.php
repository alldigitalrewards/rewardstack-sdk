<?php

namespace AllDigitalRewards\RewardStack\RedemptionApi;

use AllDigitalRewards\RewardStack\Common\AbstractCollectionApiResponse;
use AllDigitalRewards\RewardStack\Common\Entity\RedemptionApiCampaign;

class CampaignListResponse extends AbstractCollectionApiResponse
{

    /**
     * @inheritDoc
     */
    protected function getEntityClass(): string
    {
        return RedemptionApiCampaign::class;
    }
}
