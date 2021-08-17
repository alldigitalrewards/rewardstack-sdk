<?php

use AllDigitalRewards\RewardStack\Organization\OrganizationCollectionFilter;
use AllDigitalRewards\RewardStack\Organization\OrganizationListRequest;
use AllDigitalRewards\RewardStack\Organization\OrganizationListResponse;

$client = require_once __DIR__ . '/bootstrap.php';

$filter = new OrganizationCollectionFilter();
$filter->setNameFilter('test');

$organizationListRequest = new OrganizationListRequest(1, 30, $filter);

/** @var OrganizationListResponse $organizationListResponse */
$organizationListResponse = $client->request($organizationListRequest);
print_r($organizationListResponse);
exit;
