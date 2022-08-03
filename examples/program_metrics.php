<?php

use AllDigitalRewards\RewardStack\Program\MetricsRequest;
use AllDigitalRewards\RewardStack\Program\MetricsResponse;

$client = require_once __DIR__ . '/bootstrap.php';

// This is for fetching a single program
//unique id or url as param
$programRetrieveRequest = new MetricsRequest(
    'example_program_id'
);

/** @var MetricsResponse $programRetrieveResponse */
$programRetrieveResponse = $client->request($programRetrieveRequest);
print_r($programRetrieveResponse);
exit;
