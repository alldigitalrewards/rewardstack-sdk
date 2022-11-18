<?php

namespace AllDigitalRewards\RewardStack\Participant;

use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Traits\MetaValidationTrait;
use Exception;

class ParticipantPutRequest extends AbstractApiRequest
{
    use MetaValidationTrait;
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

    /**
     * @var string|null
     */
    private $phone;

    /**
     * @var string
     */
    protected $httpMethod = 'PUT';

    /**
     * ParticipantRequest constructor.
     * @param string $programId
     * @param string $uniqueId
     * @param string $firstname
     * @param string $lastname
     * @param string $emailAddress
     * @param string|null $phone
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
        string $phone = null,
        AddressRequest $address = null,
        string $birthdate = null,
        array $meta = null
    ) {
    
        $this->programId = $programId;
        $this->uniqueId = $uniqueId;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->emailAddress = $emailAddress;
        $this->phone = $phone;
        $this->address = $address;
        $this->birthdate = $birthdate;
        $this->meta = $meta;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/program/{$this->programId}/participant/$this->uniqueId";
    }

    public function getResponseObject(): AbstractEntity
    {
        return new ParticipantResponse();
    }

    /**
     * @throws Exception
     */
    public function jsonSerialize(): array
    {
        if (empty($this->meta) === false && $this->hasWellFormedMeta($this->meta) === false) {
            throw new Exception(
                'Meta data provided must have valid key/values'
            );
        }
        return [
            "firstname" => $this->firstname,
            "lastname" => $this->lastname,
            "email_address" => $this->emailAddress,
            "phone" => $this->phone,
            'address' => $this->address,
            'birthdate' => $this->birthdate,
            'meta' => $this->meta
        ];
    }
}
