<?php

use AllDigitalRewards\RewardStack\Program\ProgramPublishRequest;

$client = require_once __DIR__ . '/bootstrap.php';

$request = new ProgramPublishRequest(
    'alldigitalrewards',
    1,
);

$response = $client->request($request);
print_r($response);
exit;
