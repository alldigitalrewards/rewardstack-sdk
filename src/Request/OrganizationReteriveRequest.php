<?php

namespace AllDigitalRewards\RewardStack\Request;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Response\OrganizationReteriveResponse;

class OrganizationReteriveRequest extends AbstractApiRequest
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
        return new  OrganizationReteriveResponse();
    }

    public function jsonSerialize()
    {
        return [];
    }
}
