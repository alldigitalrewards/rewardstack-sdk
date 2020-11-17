<?php

$client = require_once __DIR__ . '/bootstrap.php';

use AllDigitalRewards\RewardStack\Participant\ParticipantRequest;
use AllDigitalRewards\RewardStack\Participant\ParticipantResponse;

$program = 'alldigitalrewards';
$participantUniqueId = 'ADRTESTP1';
$participantRequest = new ParticipantRequest(
    $program,
    $participantUniqueId,
    'John',
    'Smith',
    'nowhere+ADRTESTP1@alldigitalrewards.com'
);

/** @var ParticipantResponse $participantUpdateRequest */
$participantUpdateRequest = $client->request($participantRequest);

print_r($participantUpdateRequest);
exit;
