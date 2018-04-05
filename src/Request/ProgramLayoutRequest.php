<?php

namespace AllDigitalRewards\RewardStack\Request;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Response\ProgramLayoutResponse;

class ProgramLayoutRequest extends AbstractApiRequest
{
    /**
     * @var string
     */
    private $uniqueId;

    protected $httpMethod = 'GET';

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
