<?php

namespace AllDigitalRewards\RewardStack\ProgramContent;

use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\Entity\ProgramContentResponse;

class ProgramContentRequest extends AbstractApiRequest
{
    private $programId;

    public function __construct(string $programId)
    {
        $this->programId = $programId;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/content/$this->programId";
    }

    public function getResponseObject(): AbstractEntity
    {
        return new ProgramContentResponse();
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return [];
    }

    public function getQueryParams(): string
    {
        return 'content_type=marketplace&lang=' . $this->getLang();
    }
}
