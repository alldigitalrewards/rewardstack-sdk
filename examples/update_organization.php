<?php

use AllDigitalRewards\RewardStack\Organization\OrganizationPutRequest;
use AllDigitalRewards\RewardStack\Organization\OrganizationResponse;

$client = require_once __DIR__ . '/bootstrap.php';

$organizationRequest = new OrganizationPutRequest(
    'TESTABC1',
    'Over the Rainbow #2',
    [
        "joesrewards.com"
    ]
);

/** @var OrganizationResponse $organizationResponse */
$organizationResponse = $client->request($organizationRequest);
print_r($organizationResponse);
exit;
