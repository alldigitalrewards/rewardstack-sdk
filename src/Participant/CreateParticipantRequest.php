<?php

namespace AllDigitalRewards\RewardStack\Participant;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;

class CreateParticipantRequest extends AbstractApiRequest
{
    /**
     * @var string
     */
    private $program;

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
    private $email_address;

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

    public function __construct(
        string $program,
        string $uniqueId,
        string $firstname,
        string $lastname,
        string $email_address,
        AddressRequest $address = null,
        string $birthdate = null,
        array $meta = null
    ) {
    
        $this->program = $program;
        $this->uniqueId = $uniqueId;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email_address = $email_address;
        $this->address = $address;
        $this->birthdate = $birthdate;
        $this->meta = $meta;
    }

    public function getHttpEndpoint(): string
    {
        return '/api/user';
    }

    public function getResponseObject(): AbstractEntity
    {
        return new CreateParticipantResponse();
    }

    public function jsonSerialize()
    {
        return [
            "program" => $this->program,
            "uniqueId" => $this->uniqueId,
            "firstname" => $this->firstname,
            "lastname" => $this->lastname,
            "email_address" => $this->email_address,
            'address' => $this->address,
            'birthdate' => $this->birthdate,
            'meta' => $this->meta
        ];
    }
}
