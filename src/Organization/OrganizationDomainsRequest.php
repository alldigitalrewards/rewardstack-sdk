<?php

namespace AllDigitalRewards\RewardStack\Organization;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;

class OrganizationDomainsRequest extends AbstractApiRequest
{
    /**
     * @var string
     */
    private $uniqueId;
    protected $httpMethod = 'GET';

    /**
     * GetParticipantRequest constructor.
     * @param string $uniqueId
     */
    public function __construct(string $uniqueId)
    {
        $this->uniqueId = $uniqueId;
    }

    public function getHttpEndpoint(): string
    {
        return '/api/organization/' . $this->uniqueId. '/domain' ;
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
