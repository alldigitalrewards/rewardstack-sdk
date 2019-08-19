<?php

namespace AllDigitalRewards\RewardStack\Program;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;

class CreateProgramRequest extends AbstractApiRequest
{

    private $organization;
    private $uniqueId;
    private $name;
    private $point;
    private $phone;
    private $url;
    private $active;
    private $logo;

    protected $httpMethod = 'POST';

    public function __construct(
        string $organization,
        string $uniqueId,
        string $name,
        string $point,
        int $phone,
        string $url,
        string $active,
        string $logo
    ) {
        $this->organization =$organization;
        $this->uniqueId = $uniqueId;
        $this->name =$name;
        $this->point =$point;
        $this->phone =$phone;
        $this->url =$url;
        $this->active =$active;
        $this->logo =$logo;
    }


    public function getHttpEndpoint(): string
    {
        return '/api/program' ;
    }


    public function getResponseObject(): AbstractEntity
    {
        return new CreateProgramResponse();
    }

    public function jsonSerialize()
    {
        return [
            "organization" => $this->organization,
            "uniqueId" => $this->uniqueId,
            "name" => $this->name,
            "point" => $this->point,
            "phone" => $this->phone,
            "url" =>$this->url,
            "active" =>$this->active,
            "logo" => $this->logo

        ];
    }
}
