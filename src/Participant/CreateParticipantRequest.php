<?php

namespace AllDigitalRewards\RewardStack\Participant;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use AllDigitalRewards\RewardStack\Traits\MetaValidationTrait;
use Exception;

class CreateParticipantRequest extends AbstractApiRequest
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
     * @var string
     */
    private $language;

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
     * @param string $language
     */
    public function __construct(
        string $programId,
        string $uniqueId,
        string $firstname,
        string $lastname,
        string $emailAddress,
        AddressRequest $address = null,
        string $birthdate = null,
        array $meta = null,
        string $language = "en_US"
    ) {
        $this->programId = $programId;
        $this->uniqueId = $uniqueId;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->emailAddress = $emailAddress;
        $this->address = $address;
        $this->birthdate = $birthdate;
        $this->meta = $meta;
        $this->language = $language;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/program/{$this->programId}/participant";
    }

    public function getResponseObject(): AbstractEntity
    {
        return new CreateParticipantResponse();
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
            "program" => $this->programId,
            "unique_id" => $this->uniqueId,
            "firstname" => $this->firstname,
            "lastname" => $this->lastname,
            "email_address" => $this->emailAddress,
            'address' => $this->address,
            'birthdate' => $this->birthdate,
            'meta' => $this->meta,
            'language' => $this->language
        ];
    }
}
