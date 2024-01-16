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

    private string $service;

    /**
     * Client constructor.
     * @param AuthProxy $authProxy
     */
    public function __construct(AuthProxy $authProxy, string $service = 'service-undefined')
    {
        $this->authProxy = $authProxy;
        $this->service = $service;
    }

    /**
     * @throws GuzzleException
     */
    public function request(AbstractApiRequest $apiRequest): Common\Entity\AbstractEntity
    {
        // Generate HTTP Request from API Request
        $httpRequest = $this->generateHttpRequest($apiRequest);

        // Pass Request thru AuthProxy
        $httpResponse = $this->authProxy->request(
            $httpRequest,
            $apiRequest->getBasicAuthHeaderIfSet()
        );

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
                'accept' => 'application/json',
                'user-agent' => 'SmsApiWrapper/' . $this->getClientVersion() .
                    ' (PHP ' . phpversion() .
                    '; Service ' . $this->service . ')',
            ],
            json_encode($apiRequest)
        );
    }

    private function getClientVersion(): string
    {
        $composerJsonPath = __DIR__ . '/../composer.json';
        $composerJsonContents = file_get_contents($composerJsonPath);
        $composerData = json_decode($composerJsonContents, true);

        return $composerData['version'] ?? "VersionNotFound";
    }
}
