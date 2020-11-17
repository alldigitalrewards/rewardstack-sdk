<?php
$client = require_once __DIR__ . '/bootstrap.php';

/** @var \AllDigitalRewards\RewardStack\Organization\CreateOrganizationRequest $createOrganizationRequest */
$createOrganizationRequest = new \AllDigitalRewards\RewardStack\Organization\CreateOrganizationRequest(
    'TESTABC1',
    'TestABC #1',
    'Over the Rainbow',
    '1233211230',
    '123 Acme St',
    '', 'Beverly Hills',
    'CA',
    '90210',
    ''
);

/** @var \AllDigitalRewards\RewardStack\Organization\CreateOrganizationResponse $createOrganizationResponse */
$createOrganizationResponse = $client->request($createOrganizationRequest);
print_r($createOrganizationResponse);
exit;
