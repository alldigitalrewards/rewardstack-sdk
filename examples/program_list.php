<?php

$client = require_once __DIR__ . '/bootstrap.php';

// This is for fetching a single program

/** @var \AllDigitalRewards\RewardStack\Program\ProgramListRequest $programListRequest */
$programListRequest = new \AllDigitalRewards\RewardStack\Program\ProgramListRequest(
    'alldigitalrewards'
);

/** @var \AllDigitalRewards\RewardStack\Program\ProgramListResponse $programListResponse */
$programListResponse = $client->request($programListRequest);
print_r($programListResponse->getUniqueId());
exit;
