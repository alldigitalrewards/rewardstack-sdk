<?php

$client = require_once __DIR__ . '/bootstrap.php';

// This is for fetching collection of programs

$filter = new \AllDigitalRewards\RewardStack\Program\ProgramCollectionFilter();
$filter->setNameFilter('all digital rewards');

/** @var \AllDigitalRewards\RewardStack\Program\ProgramRetrieveRequest $programRetrieveRequest */
$programRetrieveRequest = new \AllDigitalRewards\RewardStack\Program\ProgramRetrieveRequest(1, $filter);

/** @var \AllDigitalRewards\RewardStack\Program\ProgramRetrieveResponse $programRetrieveResponse */
$programRetrieveResponse = $client->request($programRetrieveRequest);
print_r($programRetrieveResponse);
exit;
