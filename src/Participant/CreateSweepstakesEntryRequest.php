<?php

namespace AllDigitalRewards\RewardStack\Participant;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;

class CreateSweepstakesEntryRequest extends AbstractApiRequest
{
    /**
     * @var string
     */
    private $programId;

    /**
     * @var string
     */
    private $uniqueId;

    private $entryCount;

    protected $httpMethod = 'POST';

    /**
     * CreateSweepstakesEntryRequest constructor.
     * @param string $programId
     * @param string $uniqueId
     * @param int $entryCount
     */
    public function __construct(string $programId, string $uniqueId, int $entryCount)
    {
        $this->programId = $programId;
        $this->uniqueId = trim($uniqueId);
        $this->entryCount = $entryCount;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/program/{$this->programId}/participant/$this->uniqueId/sweepstake";
    }

    public function getResponseObject(): AbstractEntity
    {
        return new CreateSweepstakesEntryResponse();
    }

    public function jsonSerialize()
    {
        return [
            "entryCount" => $this->entryCount
        ];
    }
}
