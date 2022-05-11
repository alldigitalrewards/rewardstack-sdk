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
    private $enable_email_login;

    protected $httpMethod = 'POST';

    public function __construct(
        string $organization,
        string $uniqueId,
        string $name,
        string $point,
        int $phone,
        string $url,
        string $active
    ) {
        $this->organization = $organization;
        $this->uniqueId = $uniqueId;
        $this->name = $name;
        $this->point = $point;
        $this->phone = $phone;
        $this->url = $url;
        $this->active = $active;
    }

    /**
     * @return int
     */
    public function getEnableEmailLogin(): int
    {
        return $this->enable_email_login ?? 0;
    }

    /**
     * Int (1/0) or Bool true/false
     * @param mixed $enable_email_login
     */
    public function setEnableEmailLogin($enable_email_login): void
    {
        $this->enable_email_login = $enable_email_login;
    }

    public function getHttpEndpoint(): string
    {
        return '/api/program' ;
    }

    public function getResponseObject(): AbstractEntity
    {
        return new CreateProgramResponse();
    }

    public function jsonSerialize(): array
    {
        return [
            "organization" => $this->organization,
            "uniqueId" => $this->uniqueId,
            "name" => $this->name,
            "point" => $this->point,
            "phone" => $this->phone,
            "url" => $this->url,
            "active" => $this->active,
            "enable_email_login" => $this->getEnableEmailLogin()
        ];
    }
}
