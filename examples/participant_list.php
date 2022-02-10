<?php

$client = require_once __DIR__ . '/bootstrap.php';

use AllDigitalRewards\RewardStack\Participant\ParticipantCollectionFilter;
use AllDigitalRewards\RewardStack\Participant\ParticipantCollectionRequest;
use AllDigitalRewards\RewardStack\Participant\ParticipantCollectionResponse;

$program = 'sharecare';
$filter = new ParticipantCollectionFilter();
$filter->setStatusFilter(1);
$participantCollectionRequest = new ParticipantCollectionRequest($program, 1, 30, $filter);
/** @var ParticipantCollectionResponse $participantCollection */
$participantCollection = $client->request($participantCollectionRequest);
print_r($participantCollection);
exit;
