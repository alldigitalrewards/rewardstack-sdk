<?php

use AllDigitalRewards\RewardStack\Client;
use AllDigitalRewards\RewardStack\Participant\EmailParticipantAuthRequest;

/** @var Client $client */
$client = require_once __DIR__ . '/bootstrap.php';

$request = new EmailParticipantAuthRequest(
    'alldigitalrewards',
    'test@alldigitalrewards.com',
    'password'
);


$response = $client->request($request);
print_r($response);
exit;
