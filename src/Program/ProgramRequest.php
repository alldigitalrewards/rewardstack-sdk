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
    private $enable_email_login;

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

    public function getEnableEmailLogin()
    {
        return $this->enable_email_login;
    }

    /**
     * @param int $enable_email_login
     */
    public function setEnableEmailLogin(int $enable_email_login)
    {
        $this->enable_email_login = $enable_email_login;
    }

    public function disableEmailLogin()
    {
        $this->enable_email_login = 0;
    }

    public function enableEmailLogin()
    {
        $this->enable_email_login = 1;
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
        $data = [
            "name" => $this->name,
            "point" => $this->point,
            "phone" => $this->phone,
            "url" =>$this->url,
            "active" =>$this->active,
            "logo" => $this->logo,
            "organization" => $this->organization,
        ];
        if ($this->getEnableEmailLogin() !== null) {
            //only passing this if they set it
            $data['enable_email_login'] = $this->getEnableEmailLogin();
        }

        return $data;
    }
}
