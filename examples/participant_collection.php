<?php

require 'bootstrap.php';

$participantCollectionRequest = new \AllDigitalRewards\RewardStack\Participant\ParticipantCollectionRequest;

$participantCollection = $client->request($participantCollectionRequest);

print_r($participantCollection);exit;