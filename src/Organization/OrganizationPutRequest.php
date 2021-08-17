<?php


namespace AllDigitalRewards\RewardStack\Organization;

use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;

class OrganizationPutRequest extends AbstractApiRequest
{
    private $unique_id;
    private $name;
    private $domains;

    protected $httpMethod = 'PUT';

    public function __construct(
        string $unique_id,
        string $name,
        $domains
    ) {

        $this->unique_id = $unique_id;
        $this->name = $name;
        $this->domains = $domains;
    }

    /**
     * GetParticipantRequest constructor.
     * @return string
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
            "unique_id" => $this->unique_id,
            "name" => $this->name,
            "domains" => $this->domains
        ];
    }
}
