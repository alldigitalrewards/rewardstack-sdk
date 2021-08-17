<?php

$client = require_once __DIR__ . '/bootstrap.php';

use AllDigitalRewards\RewardStack\Participant\ParticipantPutRequest;
use AllDigitalRewards\RewardStack\Participant\ParticipantResponse;

$program = 'alldigitalrewards';
$participantUniqueId = 'ADRTESTP1';
$participantRequest = new ParticipantPutRequest(
    $program,
    $participantUniqueId,
    'John',
    'Smith',
    'nowhere+ADRTESTP1@alldigitalrewards.com',
    null,
    null,
    [
        ['META_KEY' => 'META_VALUE']
    ]
);

/** @var ParticipantResponse $participantUpdateRequest */
$participantUpdateRequest = $client->request($participantRequest);

print_r($participantUpdateRequest);
exit;
