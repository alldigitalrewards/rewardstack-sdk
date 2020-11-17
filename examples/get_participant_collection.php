<?php

$client = require_once __DIR__ . '/bootstrap.php';

use AllDigitalRewards\RewardStack\Participant\ParticipantCollectionRequest;
use AllDigitalRewards\RewardStack\Participant\ParticipantCollectionResponse;

$program = 'alldigitalrewards';
$participantCollectionRequest = new ParticipantCollectionRequest($program);
/** @var ParticipantCollectionResponse $participantCollection */
$participantCollection = $client->request($participantCollectionRequest);
print_r($participantCollection);
exit;
