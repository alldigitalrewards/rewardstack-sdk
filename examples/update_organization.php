<?php

$client = require_once __DIR__ . '/bootstrap.php';

/** @var \AllDigitalRewards\RewardStack\Organization\OrganizationRequest $organizationRequest */
$organizationRequest = new \AllDigitalRewards\RewardStack\Organization\OrganizationRequest(
    'TESTABC1',
    'username',
    'password',
    'Over the Rainbow #2',
    [
        "mydigitalrewards.com"
    ]
);

/** @var \AllDigitalRewards\RewardStack\Organization\OrganizationResponse $organizationResponse */
$organizationResponse = $client->request($organizationRequest);
print_r($organizationResponse);
exit;
