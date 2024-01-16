<?php

namespace AllDigitalRewards\RewardStack\Common;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Traits\LanguageHydrationTrait;
use JsonSerializable;

abstract class AbstractApiRequest implements JsonSerializable
{
    use LanguageHydrationTrait;
    protected $httpEndpoint = '/';
    protected $httpMethod = 'GET';
    protected $queryParams = '';
    protected $hasBasicAuth = false;
    protected $basicAuthUser = '';
    protected $basicAuthPassword = '';

    // Endpoint: /api/user
    public function getHttpEndpoint(): string
    {
        return $this->httpEndpoint;
    }

    // Method: GET
    public function getHttpMethod(): string
    {
        return $this->httpMethod;
    }

    // Params
    public function getQueryParams(): string
    {
        return $this->queryParams;
    }

    public function getBasicAuthHeaderIfSet(): ?string
    {
        if (!$this->isBasicAuth()) {
            return null;
        }
        return 'Basic ' . base64_encode(
            "{$this->getBasicAuthUser()}:{$this->getBasicAuthPassword()}"
        );
    }

    public function isBasicAuth(): bool
    {
        return $this->hasBasicAuth;
    }

    public function setHasBasicAuth($hasBasicAuth)
    {
        $this->hasBasicAuth = $hasBasicAuth;
    }

    public function getBasicAuthUser(): string
    {
        return $this->basicAuthUser;
    }

    public function setBasicAuthUser($basicAuthUser)
    {
        $this->basicAuthUser = $basicAuthUser;
    }

    public function getBasicAuthPassword(): string
    {
        return $this->basicAuthPassword;
    }

    public function setBasicAuthPassword($basicAuthPassword)
    {
        $this->basicAuthPassword = $basicAuthPassword;
    }

    // Response Object:
    abstract public function getResponseObject(): AbstractEntity;
}
