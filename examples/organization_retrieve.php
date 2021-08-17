<?php

use AllDigitalRewards\RewardStack\Organization\OrganizationRetreiveResponse;
use AllDigitalRewards\RewardStack\Organization\OrganizationRetrieveRequest;

$client = require_once __DIR__ . '/bootstrap.php';

$organizationRetrieveRequest = new OrganizationRetrieveRequest('TESTABC1');

/** @var OrganizationRetreiveResponse $organizationRetrieveResponse */
$organizationRetrieveResponse = $client->request($organizationRetrieveRequest);
print_r($organizationRetrieveResponse);
exit;
