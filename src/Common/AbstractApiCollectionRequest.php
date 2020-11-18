<?php

namespace AllDigitalRewards\RewardStack\Common;

abstract class AbstractApiCollectionRequest extends AbstractApiRequest
{
    protected $httpMethod = 'GET';

    /**
     * @var int
     */
    private $page;

    /**
     * @var int
     */
    private $limit;

    /**
     * @var CollectionFilterInterface|null
     */
    private $filterCollection;

    public function __construct(int $page = 1, int $limit = 30, CollectionFilterInterface $filter = null)
    {
        $this->page = $page;
        $this->limit = $limit;
        $this->filterCollection = $filter;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @param int $page
     */
    public function setPage(int $page)
    {
        $this->page = $page;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     */
    public function setLimit(int $limit)
    {
        $this->limit = $limit;
    }

    /**
     * @return CollectionFilterInterface|null
     */
    public function getFilterCollection(): CollectionFilterInterface
    {
        return $this->filterCollection;
    }

    /**
     * @param CollectionFilterInterface|null $filterCollection
     */
    public function setFilterCollection(CollectionFilterInterface $filterCollection)
    {
        $this->filterCollection = $filterCollection;
    }

    public function getQueryParams(): string
    {
        $filterQueryString = '';
        if($this->filterCollection !== null) {
            $filterQueryString = '&' . $this->filterCollection->getQueryString();
        }
        return "page={$this->page}&limit={$this->limit}" . $filterQueryString;
    }
}
