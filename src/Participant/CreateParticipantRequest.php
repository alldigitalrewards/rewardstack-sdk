<?php

namespace AllDigitalRewards\RewardStack\Participant;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;

class CreateParticipantRequest extends AbstractApiRequest
{
    /**
     * @var string
     */
    private $programId;

    /**
     * @var string
     */
    private $uniqueId;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $emailAddress;

    /**
     * @var AddressRequest|null
     */
    private $address;

    /**
     * @var string|null
     */
    private $birthdate;

    /**
     * @var array|null
     */
    private $meta;

    protected $httpMethod = 'POST';

    /**
     * CreateParticipantRequest constructor.
     * @param string $programId
     * @param string $uniqueId
     * @param string $firstname
     * @param string $lastname
     * @param string $emailAddress
     * @param AddressRequest|null $address
     * @param string|null $birthdate
     * @param array|null $meta
     */
    public function __construct(
        string $programId,
        string $uniqueId,
        string $firstname,
        string $lastname,
        string $emailAddress,
        AddressRequest $address = null,
        string $birthdate = null,
        array $meta = null
    ) {
        $this->programId = $programId;
        $this->uniqueId = $uniqueId;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->emailAddress = $emailAddress;
        $this->address = $address;
        $this->birthdate = $birthdate;
        $this->meta = $meta;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/program/{$this->programId}/participant";
    }

    public function getResponseObject(): AbstractEntity
    {
        return new CreateParticipantResponse();
    }

    public function jsonSerialize()
    {
        return [
            "program" => $this->programId,
            "unique_id" => $this->uniqueId,
            "firstname" => $this->firstname,
            "lastname" => $this->lastname,
            "email_address" => $this->emailAddress,
            'address' => $this->address,
            'birthdate' => $this->birthdate,
            'meta' => $this->meta
        ];
    }
}
