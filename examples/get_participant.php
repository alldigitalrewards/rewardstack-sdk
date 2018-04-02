<?php

require 'bootstrap.php';

$participantRequest = new \AllDigitalRewards\RewardStack\Request\ParticipantRequest('TESTPARTICIPANT1');

$participant = $client->request($participantRequest);

print_r($participant);