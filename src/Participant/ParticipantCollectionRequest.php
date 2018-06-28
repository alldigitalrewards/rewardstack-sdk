<?php

namespace AllDigitalRewards\RewardStack\Participant;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApirequest;

class ParticipantCollectionRequest extends AbstractApiRequest
{
    protected $httpEndpoint = '/api/user';

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

    public function getResponseObject(): AbstractEntity
    {
        return new ParticipantCollectionResponse();
    }

    public function jsonSerialize()
    {
        return [];
    }
}
