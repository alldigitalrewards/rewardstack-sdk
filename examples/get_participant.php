<?php

$client = require_once __DIR__ . '/bootstrap.php';

use \AllDigitalRewards\RewardStack\Participant\ParticipantRetrieveRequest;
use \AllDigitalRewards\RewardStack\Participant\ParticipantRetrieveResponse;

$program = 'alldigitalrewards';
$participantUniqueId = 'ADRTESTP1';
$participantRequest = new ParticipantRetrieveRequest($program, $participantUniqueId);

/** @var ParticipantRetrieveResponse $participantResponse */
$participantResponse = $client->request($participantRequest);
print_r($participantResponse);
exit;
