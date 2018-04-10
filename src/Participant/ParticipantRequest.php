<?php


namespace AllDigitalRewards\RewardStack\Participant;

use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;

class ParticipantRequest extends AbstractApiRequest
{

    /**
      * @var string
     */
    private $uniqueId;

    protected $httpEndpoint ='PUT';

    public function __construct(string $uniqueId)
    {
        $this->uniqueId = $uniqueId;
    }

    public function getHttpEndpoint(): string
    {
        return '/api/user/' . $this->uniqueId;
    }

    public function getResponseObject(): AbstractEntity
    {
        return new ParticipantResponse();
    }

    public function jsonSerialize()
    {
        return [

            "program" => "sharecare",
        "unique_id" => "TESTPARTICIPANT1",
        "firstname" => "Zech",
        "lastname"=> "Walden2",
        "email_address"=> "zech+test@alldigitalrewards.com",
        "password"=> "password",
        "active"=> 1,
        "phone" => "1231235732",
        "meta" => ["hello" => "world2","new" => "yolo", "new2" => "yolo2"],
        "address" => [
                "firstname" => "Zech",
                "lastname" => "Walden",
                "address1" => "123 Acme Dr",
                "address2" => "",
                "city" => "Beverly Hills",
                "state" => "CA",
                "zip"=> "90210"
        ]

        ];
    }
}
