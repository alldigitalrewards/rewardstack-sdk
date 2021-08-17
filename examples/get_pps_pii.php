<?php

$client = require_once __DIR__ . '/bootstrap.php';

use AllDigitalRewards\RewardStack\Participant\ParticipantResponse;
use AllDigitalRewards\RewardStack\ProgramParticipantApi\ProgramParticipantPiiRequest;

$program = 'alldigitalrewards';
$participantUniqueId = 'ADRTESTP1';
$participantRequest = new ProgramParticipantPiiRequest($program, $participantUniqueId);

/** @var ParticipantResponse $participantResponse */
$participantResponse = $client->request($participantRequest);
print_r($participantResponse);
exit;
