<?php

namespace AllDigitalRewards\RewardStack\RedemptionApi;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use AllDigitalRewards\RewardStack\Common\Entity\SuccessResponse;

class PinMarkRedeemedRequest extends AbstractApiRequest
{
    private $subDomain;
    private $pin;
    private $transactionGuid;

    protected $httpMethod = 'PUT';

    public function __construct(string $subDomain, string $pin, string $transactionGuid)
    {
        $this->subDomain = $subDomain;
        $this->pin = $pin;
        $this->transactionGuid = $transactionGuid;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/redemption-campaigns/$this->subDomain/pins/$this->pin";
    }

    public function getQueryParams(): string
    {
        return 'lang=' . $this->getLang();
    }

    public function getResponseObject(): AbstractEntity
    {
        return new SuccessResponse();
    }

    public function jsonSerialize()
    {
        return [
            'transaction_guid' => $this->transactionGuid
        ];
    }
}
