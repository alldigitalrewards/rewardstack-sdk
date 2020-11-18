<?php

$client = require_once __DIR__ . '/bootstrap.php';

// This is for fetching a single program

/** @var \AllDigitalRewards\RewardStack\Program\ProgramRetrieveRequest $programRetrieveRequest */
$programRetrieveRequest = new \AllDigitalRewards\RewardStack\Program\ProgramRetrieveRequest(
    'sharecare'
);

/** @var \AllDigitalRewards\RewardStack\Program\ProgramRetrieveResponse $programRetrieveResponse */
$programRetrieveResponse = $client->request($programRetrieveRequest);
print_r($programRetrieveResponse->getUniqueId());
exit;
