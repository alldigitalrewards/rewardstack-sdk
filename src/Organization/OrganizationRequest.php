<?php


namespace AllDigitalRewards\RewardStack\Organization;

use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;

class OrganizationRequest extends AbstractApiRequest
{
    private $unique_id;
    private $username;
    private $password;
    private $name;
    private $domains;

    protected $httpMethod = 'PUT';

    public function __construct(
        string $unique_id,
        string $username,
        string $password,
        string $name,
        $domains
    ) {

        $this->unique_id = $unique_id;
        $this->username =$username;
        $this->password =$password;
        $this->name =$name;
        $this->domains =$domains;
    }

    /**
     * GetParticipantRequest constructor.
     * @param string $uniqueId
     */
    public function getHttpEndpoint(): string
    {
        return '/api/organization/' .$this->unique_id;
    }


    public function getResponseObject(): AbstractEntity
    {
        return new OrganizationResponse();
    }


    public function jsonSerialize()
    {
        return [

            "username" => $this->username,
            "password" => $this->password,
            "name" => $this->name,
            "domains" => $this->domains
        ];
    }
}
