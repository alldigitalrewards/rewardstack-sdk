<?php

use AllDigitalRewards\RewardStack\Organization\CreateOrganizationRequest;
use AllDigitalRewards\RewardStack\Organization\CreateOrganizationResponse;

$client = require_once __DIR__ . '/bootstrap.php';

$createOrganizationRequest = new CreateOrganizationRequest(
    uniqid(),
    'Over the Rainbow',
    '1233211230',
    '123 Acme St',
    '',
    'Beverly Hills',
    'CA',
    '90210',
    ''
);

/** @var CreateOrganizationResponse $createOrganizationResponse */
$createOrganizationResponse = $client->request($createOrganizationRequest);
print_r($createOrganizationResponse);
exit;
