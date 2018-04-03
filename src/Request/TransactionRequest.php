<?php

namespace AllDigitalRewards\RewardStack\Request;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;

use AllDigitalRewards\RewardStack\Response\TransactionResponse;

class TransactionRequest extends AbstractApiRequest
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
        return '/api/user/' . $this->uniqueId. '/transaction' ;
    }

    public function getResponseObject(): AbstractEntity
    {
        return new TransactionResponse();
    }

    public function jsonSerialize()
    {
        return [];
    }
}
