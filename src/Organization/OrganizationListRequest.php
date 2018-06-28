<?php

namespace AllDigitalRewards\RewardStack\Organization;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApirequest;

class OrganizationListRequest extends AbstractApiRequest
{
    protected $httpMethod = 'GET';

    /**
     * @var int
     */
    private $page = 1;

    public function __construct(int $page = 1)
    {
        $this->page = $page;
    }

    public function getHttpEndpoint(): string
    {
        return '/api/organization';
    }

    public function getQueryParams(): string
    {
        return "page=" . $this->page;
    }

    public function getResponseObject(): AbstractEntity
    {
        return new OrganizationListResponse();
    }

    public function jsonSerialize()
    {
        return [];
    }
}
