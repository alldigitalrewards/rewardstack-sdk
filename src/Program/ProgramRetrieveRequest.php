<?php

namespace AllDigitalRewards\RewardStack\Program;

use AllDigitalRewards\RewardStack\Common\CollectionFilterInterface;
use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;

class ProgramRetrieveRequest extends AbstractApiRequest
{
    protected $httpMethod = 'GET';

    /**
     * @var int
     */
    private $page = 1;

    /**
     * @var CollectionFilterInterface|null
     */
    private $filterCollection;

    public function __construct(int $page = 1, CollectionFilterInterface $filter = null)
    {
        $this->page = $page;
        $this->filterCollection = $filter;
    }

    public function getQueryParams(): string
    {
        $filterQueryString = '';
        if($this->filterCollection !== null) {
            $filterQueryString = '&' . $this->filterCollection->getQueryString();
        }
        return "page=" . $this->page . $filterQueryString;
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
