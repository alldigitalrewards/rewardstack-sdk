<?php

namespace AllDigitalRewards\RewardStack\Transaction;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApirequest;

class CreateTransactionRequest extends AbstractApiRequest
{

    /**
     * @var string
     */
    private $uniqueId;


    protected $httpMethod = 'POST';

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
        return '/api/user/' . $this->uniqueId . '/transaction';
    }

    public function getResponseObject(): AbstractEntity
    {
        return new CreateTransactionResponse();
    }

    public function jsonSerialize()
    {
        return [
            "products" => [
                [
                    "sku" => "HRA01",
                    "quantity" => 1,
                    "amount" => 10
                ],
                [
                    "sku" => "PS0000889497-24",
                    "quantity" => 1
                ]
            ],
            "issue_points" => true,
            "meta" => [
                ["hello" => "world2"],
                ["new" => "hello world"]],
            "shipping" => [
                "firstname" => "Zech1",
                "lastname" => "Walden1",
                "address1" => "123 Acme Dr",
                "address2" => "",
                "city" => "Beverly Hills",
                "state" => "CA",
                "zip" => "90210"
            ]
        ];
    }
}
