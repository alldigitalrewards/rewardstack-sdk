<?php

$client = require_once __DIR__ . '/bootstrap.php';

// This is for fetching collection of programs

$filter = new \AllDigitalRewards\RewardStack\Program\ProgramCollectionFilter();
$filter->setNameFilter('test');

// Set page / limit / filter in constructor or by setter

/** @var \AllDigitalRewards\RewardStack\Program\ProgramListRequest $programListRequest */
$programListRequest = new \AllDigitalRewards\RewardStack\Program\ProgramListRequest(1, 30, $filter);
$programListRequest->setPage(1);
$programListRequest->setLimit(15);
$programListRequest->setFilterCollection($filter);

/** @var \AllDigitalRewards\RewardStack\Program\ProgramListResponse $programListResponse */
$programListResponse = $client->request($programListRequest);
print_r($programListResponse);
exit;

