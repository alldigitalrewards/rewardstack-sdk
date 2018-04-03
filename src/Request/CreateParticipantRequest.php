<?php

namespace AllDigitalRewards\RewardStack\Request;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Response\CreateParticipantResponse;

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


    protected $httpMethod = 'POST';

    public function __construct(
        string $program,
        string $uniqueId,
        string $firstname,
        string $lastname,
        string $email_address
    ) {
    

        $this->program = $program;
        $this->uniqueId = $uniqueId;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email_address = $email_address;
    }

    public function getHttpEndpoint(): string
    {
        return '/api/user' ;
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
            "firstname" =>$this->firstname,
            "lastname"=>$this->lastname,
            "email_address"=>$this->email_address
        ];
    }
}
