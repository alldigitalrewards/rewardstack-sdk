<?php

namespace AllDigitalRewards\RewardStack\Product;

use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;

class ProgramProductRetrieveRequest extends AbstractApiRequest
{
    protected $httpMethod = 'GET';

    protected string $program;

    protected array $skus;

    protected int $limit;

    public function __construct(string $program, array $skus, int $limit = 1)
    {
        $this->program = $program;
        $this->skus = $skus;
        $this->limit = $limit;
    }

    public function getHttpEndpoint(): string
    {
        return '/api/product/program/catalog/';
    }

    public function getQueryParams(): string
    {
        $params = ['program=' . rawurlencode($this->program)];

        foreach ($this->skus as $sku) {
            $params[] = 'sku[]=' . rawurlencode($sku);
        }

        $params[] = 'limit=' . $this->limit;

        return implode('&', $params);
    }

    public function getResponseObject(): AbstractEntity
    {
        return new ProgramProductRetrieveResponse();
    }

    public function jsonSerialize(): array
    {
        return [];
    }
}
