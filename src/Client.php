<?php

namespace AllDigitalRewards\RewardStack;

use AllDigitalRewards\RewardStack\Auth\AuthProxy;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;

class Client
{
    /**
     * @var AuthProxy
     */
    private $authProxy;

    /**
     * Client constructor.
     * @param AuthProxy $authProxy
     */
    public function __construct(AuthProxy $authProxy)
    {
        $this->authProxy = $authProxy;
    }

    /**
     * @throws GuzzleException
     */
    public function request(AbstractApiRequest $apiRequest): Common\Entity\AbstractEntity
    {
        // Generate HTTP Request from API Request
        $httpRequest = $this->generateHttpRequest($apiRequest);

        // Pass Request thru AuthProxy
        $httpResponse = $this->authProxy->request($httpRequest);

        // Generate Response
        $responseObject = $apiRequest->getResponseObject();

        return $responseObject->hydrate(json_decode($httpResponse->getBody()));
    }

    private function generateHttpRequest(AbstractApiRequest $apiRequest): RequestInterface
    {
        return new Request(
            $apiRequest->getHttpMethod(),
            $this->authProxy
                ->getUri()
                ->withPath($apiRequest->getHttpEndpoint())
                ->withQuery($apiRequest->getQueryParams()),
            [
                'cache-control' => 'no-cache',
                'content-type' => 'application/json',
                'accept' => 'application/json'
            ],
            json_encode($apiRequest)
        );
    }
}
