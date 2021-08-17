<?php

namespace AllDigitalRewards\RewardStack\Organization;

use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;

class CreateOrganizationRequest extends AbstractApiRequest
{
    private $unique_id;
    private $name;
    private $phone;
    private $address1;
    private $address2;
    private $city;
    private $state;
    private $zip;
    private $parent;

    protected $httpMethod = 'POST';


    public function __construct(
        string $unique_id,
        string $name,
        $phone,
        string $address1,
        string $address2,
        string $city,
        string $state,
        string $zip,
        string $parent = null
    ) {
    
        $this->unique_id = $unique_id;
        $this->name = $name;
        $this->phone = $phone;
        $this->address1 = $address1;
        $this->address2 = $address2;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
        $this->parent = $parent;
    }


    public function getHttpEndpoint(): string
    {
        return '/api/organization' ;
    }


    public function getResponseObject(): AbstractEntity
    {
        return new CreateOrganizationResponse();
    }


    public function jsonSerialize()
    {
        return [
            "unique_id" => $this->unique_id,
            "name" => $this->name,
            "phone" => $this->phone,
            "address1" =>$this->address1,
            "address2" =>$this->address2,
            "city" => $this->city,
            "state" => $this->state,
            "zip" => $this->zip,
            "parent" => $this->parent,
        ];
    }
}
