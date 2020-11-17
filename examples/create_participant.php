<?php
$client = require_once __DIR__ . '/bootstrap.php';

use AllDigitalRewards\RewardStack\Participant\CreateParticipantRequest;
use AllDigitalRewards\RewardStack\Participant\CreateParticipantResponse;

$program = 'alldigitalrewards';
$participantUniqueId = 'ADRTESTP1';

$createParticipantRequest = new CreateParticipantRequest(
    $program,
    $participantUniqueId,
    'John',
    'Smith',
    'johnsmith+sdk-test@alldigitalrewards.com'
);

/** @var CreateParticipantResponse $createParticipantResponse */
$createParticipantResponse = $client->request($createParticipantRequest);
print_r($createParticipantResponse);
exit;
