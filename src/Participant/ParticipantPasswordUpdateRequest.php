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
    /**
     * @var string
     */
    private $inviteToken;

    protected $httpMethod = 'PATCH';

    /**
     * @throws Exception
     */
    public function __construct(
        string $programId,
        string $email,
        string $password,
        string $inviteToken
    ) {
        $this->programId = trim($programId);
        $this->email = trim($email);
        $this->password = trim($password);
        $this->inviteToken = trim($inviteToken);
        if (empty($this->programId) === true) {
            throw new Exception('Program Uuid must not be empty.');
        }
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Email must be valid.');
        }
        if (empty($this->password) === true || strlen($this->password) < 12) {
            throw new Exception('Password must not be empty and at least 12 characters.');
        }
        if (empty($this->inviteToken) === true) {
            throw new Exception('Invite Token must not be empty.');
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
            'invite_token' => $this->inviteToken,
        ];
    }
}
