<?php

namespace AllDigitalRewards\RewardStack\Organization;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;

class OrganizationRetrieveRequest extends AbstractApiRequest
{
    /**
     * @var string
     */
    private $unique_id;


    protected $httpMethod = 'GET';

    public function __construct(string $unique_id)
    {
        $this->unique_id = $unique_id;
    }

    public function getHttpEndpoint(): string
    {
        return '/api/organization/' . $this->unique_id ;
    }

    public function getResponseObject(): AbstractEntity
    {
        return new  OrganizationRetreiveResponse();
    }

    public function jsonSerialize(): array
    {
        return [];
    }
}
