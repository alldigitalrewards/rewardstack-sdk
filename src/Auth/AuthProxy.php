<?php

namespace AllDigitalRewards\RewardStack\Auth;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;

class AuthProxy
{
    const TOKEN_ENDPOINT = "/token";

    /**
     * @var Credentials
     */
    private $credentials;
    /**
     * @var UriInterface
     */
    private $uri;
    /**
     * @var ClientInterface
     */
    private $httpClient;
    /**
     * @var JwtToken
     */
    private $jwtToken;

    /**
     * AuthProxy constructor.
     * @param Credentials $credentials
     * @param UriInterface $uri
     * @param ClientInterface $httpClient
     */
    public function __construct(
        Credentials $credentials,
        UriInterface $uri,
        ClientInterface $httpClient
    ) {
        $this->credentials = $credentials;
        $this->uri = $uri;
        $this->httpClient = $httpClient;
    }

    /**
     * @return JwtToken
     */
    public function getJwtToken(): JwtToken
    {
        if (!$this->jwtToken instanceof JwtToken || $this->jwtToken->isExpired() === true) {
            $this->requestJwtToken();
        }

        return $this->jwtToken;
    }

    /**
     * @param JwtToken $jwtToken
     */
    public function setJwtToken(JwtToken $jwtToken)
    {
        $this->jwtToken = $jwtToken;
    }

    /**
     * @return UriInterface
     */
    public function getUri(): UriInterface
    {
        return $this->uri;
    }

    /**
     * @throws GuzzleException
     */
    public function request(RequestInterface $request): ResponseInterface
    {
        // Add Auth Header to request.
        // Submit Request
        return $this->httpClient->send(
            $this->addAuthHeaderToRequest($request)
        );
    }

    private function addAuthHeaderToRequest(RequestInterface $request): RequestInterface
    {
        return $request->withHeader(
            'Authorization',
            'Bearer ' . $this->getJwtToken()->getToken()
        );
    }

    public function requestJwtToken()
    {
        $httpResponse = $this->httpClient->send(
            $this->generateTokenRequest()
        );

        $response = json_decode($httpResponse->getBody());

        $this->jwtToken = new JwtToken($response->token, $response->expires);

        $this->setJwtToken($this->jwtToken);
    }

    private function generateTokenRequest(): RequestInterface
    {
        return new Request(
            'POST',
            $this->uri->withPath(self::TOKEN_ENDPOINT),
            [
                'Authorization' => 'Basic ' . base64_encode(
                    "{$this->credentials->getUsername()}:{$this->credentials->getPassword()}"
                )
            ]
        );
    }
}
