<?php
require 'bootstrap.php';

$participantRequest = new AllDigitalRewards\RewardStack\Participant\ParticipantRequest("TESTPARTICIPANT1");

/**
 * @var \AllDigitalRewards\RewardStack\Participant\AbstractCollectionApiResponse $participantRequest
 */
$participant = $client->request($participantRequest);

print_r($participant); exit;