<?php

$client = require_once __DIR__ . '/bootstrap.php';

/** @var \AllDigitalRewards\RewardStack\Organization\OrganizationListRequest $organizationListRequest */
$organizationListRequest = new \AllDigitalRewards\RewardStack\Organization\OrganizationListRequest();

/** @var \AllDigitalRewards\RewardStack\Organization\OrganizationListResponse $organizationListResponse */
$organizationListResponse = $client->request($organizationListRequest);
print_r($organizationListResponse);
exit;
