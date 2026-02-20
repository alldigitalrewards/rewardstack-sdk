<?php

namespace AllDigitalRewards\RewardStack\Share;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;

/**
 * Request to share points between participants.
 *
 * Transfers shareable points from one participant to another within the same program.
 * Requires point_sharing to be enabled on the program.
 */
class SharePointsRequest extends AbstractApiRequest
{
    /**
     * @var string
     */
    private $programId;

    /**
     * @var string
     */
    private $sharerUniqueId;

    /**
     * @var string
     */
    private $recipientEmail;

    /**
     * @var float
     */
    private $amount;

    protected $httpMethod = 'POST';

    /**
     * SharePointsRequest constructor.
     *
     * @param string $programId The program unique identifier
     * @param string $sharerUniqueId The unique ID of the participant sharing points
     * @param string $recipientEmail The email address of the recipient participant
     * @param float $amount The amount of shareable points to transfer
     */
    public function __construct(
        string $programId,
        string $sharerUniqueId,
        string $recipientEmail,
        float $amount
    ) {
        $this->programId = $programId;
        $this->sharerUniqueId = $sharerUniqueId;
        $this->recipientEmail = $recipientEmail;
        $this->amount = $amount;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/program/{$this->programId}/participant/{$this->sharerUniqueId}/share";
    }

    public function getResponseObject(): AbstractEntity
    {
        return new SharePointsResponse();
    }

    public function jsonSerialize(): array
    {
        return [
            'recipient_email' => $this->recipientEmail,
            'amount' => $this->amount,
        ];
    }
}
