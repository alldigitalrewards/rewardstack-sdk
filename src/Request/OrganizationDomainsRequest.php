<?php

namespace AllDigitalRewards\RewardStack\Request;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Response\OrganizationDomainsResponse;

class OrganizationDomainsRequest extends AbstractApiRequest
{
    /**
     * @var string
     */
    private $uniqueId;

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
