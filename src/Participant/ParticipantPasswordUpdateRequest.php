<?php

namespace AllDigitalRewards\RewardStack\Participant;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use AllDigitalRewards\RewardStack\Common\Entity\SuccessResponse;
use Exception;

class ParticipantPasswordUpdateRequest extends AbstractApiRequest
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

    protected $httpMethod = 'PATCH';

    /**
     * @throws Exception
     */
    public function __construct(string $programId, string $email, string $password)
    {
        $this->programId = trim($programId);
        $this->email = trim($email);
        $this->password = trim($password);
        if (empty($this->programId) === true) {
            throw new Exception('Program Uuid must not be empty.');
        }
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Email must be valid.');
        }
        if (empty($this->password) === true || strlen($this->password) < 12) {
            throw new Exception('Password must not be empty and at least 12 characters.');
        }
    }

    public function getHttpEndpoint(): string
    {
        return "/api/program/{$this->programId}/participant/recovery";
    }

    public function getResponseObject(): AbstractEntity
    {
        return new SuccessResponse();
    }

    public function jsonSerialize(): array
    {
        return [
            'email_address' => $this->email,
            'password' => $this->password,
        ];
    }
}
