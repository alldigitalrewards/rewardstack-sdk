<?php

$client = require_once __DIR__ . '/bootstrap.php';

/** @var \AllDigitalRewards\RewardStack\Organization\OrganizationRetrieveRequest $organizationRetrieveRequest */
$organizationRetrieveRequest = new \AllDigitalRewards\RewardStack\Organization\OrganizationRetrieveRequest('TESTABC1');

/** @var \AllDigitalRewards\RewardStack\Organization\OrganizationRetreiveResponse $organizationReteriveResponse */
$organizationReteriveResponse = $client->request($organizationRetrieveRequest);
print_r($organizationReteriveResponse);
exit;
