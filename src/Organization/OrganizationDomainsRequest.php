<?php

namespace AllDigitalRewards\RewardStack\Organization;

use AllDigitalRewards\RewardStack\Common\AbstractApiCollectionRequest;
use AllDigitalRewards\RewardStack\Common\CollectionFilterInterface;
use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;

class OrganizationDomainsRequest extends AbstractApiCollectionRequest
{
    /**
     * @var string
     */
    private $uniqueId;

    /**
     * OrganizationDomainsRequest constructor.
     * @param string $uniqueId
     * @param int $page
     * @param int $limit
     * @param CollectionFilterInterface|null $filter
     */
    public function __construct(
        string $uniqueId,
        int $page = 1,
        int $limit = 30,
        CollectionFilterInterface $filter = null
    ) {
        parent::__construct($page, $limit, $filter);
        $this->uniqueId = $uniqueId;
    }

    public function getHttpEndpoint(): string
    {
        return '/api/organization/' . $this->uniqueId . '/domain';
    }

    public function getResponseObject(): AbstractEntity
    {
        return new OrganizationDomainsResponse();
    }

    public function jsonSerialize()
    {
        return [];
    }
}
