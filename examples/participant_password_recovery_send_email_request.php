<?php

use AllDigitalRewards\RewardStack\Client;
use AllDigitalRewards\RewardStack\Participant\ParticipantPasswordResetSendEmailRequest;

/** @var Client $client */
$client = require_once __DIR__ . '/bootstrap.php';

$request = new ParticipantPasswordResetSendEmailRequest(
    'alldigitalrewards',
    'testuuid',
);

$response = $client->request($request);
print_r($response);
exit;
