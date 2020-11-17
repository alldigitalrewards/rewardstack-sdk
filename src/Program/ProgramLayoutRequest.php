<?php

namespace AllDigitalRewards\RewardStack\Program;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;

class ProgramLayoutRequest extends AbstractApiRequest
{
    /**
     * @var string
     */
    private $uniqueId;

    protected $httpMethod = 'GET';

    /**
     * ProgramLayoutRequest constructor.
     * @param string $uniqueId
     */
    public function __construct(string $uniqueId)
    {
        $this->uniqueId = $uniqueId;
    }

    public function getHttpEndpoint(): string
    {
        return '/api/program/'. $this->uniqueId .'/layout';
    }

    public function getResponseObject(): AbstractEntity
    {
        return new ProgramLayoutResponse();
    }

    public function jsonSerialize()
    {
        return [];
    }
}
