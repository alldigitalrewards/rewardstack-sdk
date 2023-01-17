<?php

use AllDigitalRewards\RewardStack\Client;
use AllDigitalRewards\RewardStack\Participant\ParticipantPasswordResetGeneralUrlRequest;

/** @var Client $client */
$client = require_once __DIR__ . '/bootstrap.php';

$request = new ParticipantPasswordResetGeneralUrlRequest(
    'alldigitalrewards',
    'testuuid',
);

$response = $client->request($request);
print_r($response);
exit;
