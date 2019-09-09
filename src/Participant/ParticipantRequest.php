<?php


namespace AllDigitalRewards\RewardStack\Participant;

use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;

class ParticipantRequest extends AbstractApiRequest
{

    /**
     * @var string
     */
    private $unique_id;

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

    /**
     * @var string
     */
    protected $httpMethod = 'PUT';

    public function __construct(
        string $uniqueId,
        string $firstname,
        string $lastname,
        string $email_address,
        AddressRequest $address = null,
        string $birthdate = null,
        array $meta = null
    )
    {
        $this->unique_id = $uniqueId;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email_address = $email_address;
        $this->address = $address;
        $this->birthdate = $birthdate;
        $this->meta = $meta;
    }

    public function getHttpEndpoint(): string
    {
        return '/api/user/' . $this->unique_id;
    }

    public function getResponseObject(): AbstractEntity
    {
        return new ParticipantResponse();
    }

    public function jsonSerialize()
    {
        return [
            "firstname" => $this->firstname,
            "lastname" => $this->lastname,
            "email_address" => $this->email_address,
            'address' => $this->address,
            'birthdate' => $this->birthdate,
            'meta' => $this->meta
        ];
    }
}
