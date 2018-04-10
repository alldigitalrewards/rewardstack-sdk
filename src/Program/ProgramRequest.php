<?php

namespace AllDigitalRewards\RewardStack\Program;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;

class ProgramRequest extends AbstractApiRequest
{

    private $uniqueId;
    private $name;
    private $point;
    private $phone;
    private $url;
    private $active;
    private $logo;
    private $organization;

    protected $httpMethod = 'PUT';

    public function __construct(
        string $uniqueId,
        string $name,
        string $point,
        int $phone,
        string $url,
        string $active,
        string $logo,
        string $organization
    ) {
        $this->uniqueId = $uniqueId;
        $this->name =$name;
        $this->point =$point;
        $this->phone =$phone;
        $this->url =$url;
        $this->active =$active;
        $this->logo =$logo;
        $this->organization =$organization;
    }

    public function getHttpEndpoint(): string
    {
        return '/api/program/' .$this->uniqueId ;
    }

    public function getResponseObject(): AbstractEntity
    {
        return new ProgramResponse();
    }

    public function jsonSerialize()
    {
        return [
            "name" => $this->name,
            "point" => $this->point,
            "phone" => $this->phone,
            "url" =>$this->url,
            "active" =>$this->active,
            "logo" => $this->logo,
            "organization" => $this->organization,

        ];
    }
}
