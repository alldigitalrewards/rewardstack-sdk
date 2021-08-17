<?php

use AllDigitalRewards\RewardStack\Program\ProgramCollectionFilter;
use AllDigitalRewards\RewardStack\Program\ProgramListRequest;
use AllDigitalRewards\RewardStack\Program\ProgramListResponse;

$client = require_once __DIR__ . '/bootstrap.php';

// This is for fetching collection of programs

$filter = new ProgramCollectionFilter();
$filter->setNameFilter('test');

// Set page / limit / filter in constructor or by setter

$programListRequest = new ProgramListRequest(1, 30, $filter);
$programListRequest->setPage(1);
$programListRequest->setLimit(15);
$programListRequest->setFilterCollection($filter);

/** @var ProgramListResponse $programListResponse */
$programListResponse = $client->request($programListRequest);
print_r($programListResponse);
exit;
