<?php

require 'bootstrap.php';

$participantRetrieveRequest = new \AllDigitalRewards\RewardStack\Participant\ParticipantRetrieveRequest('TESTPARTICIPANT1');

$participantRetreieResponse = $client->request($participantRetrieveRequest);

print_r($participantRetreieResponse); exit;