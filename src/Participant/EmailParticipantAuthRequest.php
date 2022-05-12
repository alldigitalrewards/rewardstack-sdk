<?php

namespace AllDigitalRewards\RewardStack\Participant;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use Exception;

class EmailParticipantAuthRequest extends AbstractApiRequest
{
    /**
     * @var string
     */
    private $programId;
    /**
     * @var string
     */
    private $email;
    /**
     * @var string
     */
    private $password;

    protected $httpMethod = 'POST';

    /**
     * @throws Exception
     */
    public function __construct(string $programId, string $email, string $password)
    {
        $this->programId = $programId;
        $this->email = trim($email);
        $this->password = trim($password);
        if (empty($this->email) === true) {
            throw new Exception('Email must be valid.');
        }
        if (empty($this->password) === true) {
            throw new Exception('Password must not be empty.');
        }
    }

    public function getHttpEndpoint(): string
    {
        return "/api/program/{$this->programId}/participant/auth";
    }

    public function getResponseObject(): AbstractEntity
    {
        return new ParticipantRetrieveResponse();
    }

    public function jsonSerialize(): array
    {
        return [
            'email_address' => $this->email,
            'password' => $this->password,
        ];
    }
}
