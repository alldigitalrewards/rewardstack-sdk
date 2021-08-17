<?php

use AllDigitalRewards\RewardStack\Program\ProgramRetrieveRequest;
use AllDigitalRewards\RewardStack\Program\ProgramRetrieveResponse;

$client = require_once __DIR__ . '/bootstrap.php';

// This is for fetching a single program
//unique id or url as param
$programRetrieveRequest = new ProgramRetrieveRequest(
    'batman.mydigitalrewards.com'
);

/** @var ProgramRetrieveResponse $programRetrieveResponse */
$programRetrieveResponse = $client->request($programRetrieveRequest);
print_r($programRetrieveResponse);
exit;
