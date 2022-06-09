<?php

use AllDigitalRewards\RewardStack\Client;
use AllDigitalRewards\RewardStack\Participant\ParticipantPasswordResetRequest;
use AllDigitalRewards\RewardStack\Participant\ParticipantPasswordUpdateRequest;

/** @var Client $client */
$client = require_once __DIR__ . '/bootstrap.php';

$request = new ParticipantPasswordUpdateRequest(
    'alldigitalrewards',
    'test@test.com',
    'passwordtestme1212',
    'sometoken'
);

$response = $client->request($request);
print_r($response);
exit;
