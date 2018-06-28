<?php

namespace AllDigitalRewards\RewardStack\Program;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApirequest;

class ProgramRetrieveRequest extends AbstractApiRequest
{
    protected $httpMethod = 'GET';

    /**
     * @var int
     */
    private $page = 1;


    public function __construct(int $page = 1)
    {
        $this->page = $page;
    }

    public function getQueryParams(): string
    {
        return "page=" . $this->page;
    }

    public function getHttpEndpoint(): string
    {
        return '/api/program';
    }


    public function getResponseObject(): AbstractEntity
    {
        return new ProgramRetrieveResponse();
    }

    public function jsonSerialize()
    {
        return [];
    }
}
