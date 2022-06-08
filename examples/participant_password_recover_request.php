<?php

use AllDigitalRewards\RewardStack\Client;
use AllDigitalRewards\RewardStack\Participant\ParticipantPasswordResetRequest;

/** @var Client $client */
$client = require_once __DIR__ . '/bootstrap.php';

$request = new ParticipantPasswordResetRequest(
    'alldigitalrewards',
    'test@test.com',
);

$response = $client->request($request);
print_r($response);
exit;
