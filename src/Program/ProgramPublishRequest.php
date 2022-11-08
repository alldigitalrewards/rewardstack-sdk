<?php

namespace AllDigitalRewards\RewardStack\Program;

use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\Entity\SuccessResponse;

class ProgramPublishRequest extends AbstractApiRequest
{
    private $uniqueId;
    private $publish;

    protected $httpMethod = 'PUT';

    public function __construct(string $uniqueId, int $publish)
    {
        $this->uniqueId = $uniqueId;
        $this->publish = $publish;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/program/$this->uniqueId/publish/$this->publish";
    }

    public function getResponseObject(): AbstractEntity
    {
        return new SuccessResponse();
    }

    public function jsonSerialize(): array
    {
        return [];
    }
}