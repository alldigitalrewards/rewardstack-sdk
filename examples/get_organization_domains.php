<?php

$client = require_once __DIR__ . '/bootstrap.php';

/** @var \AllDigitalRewards\RewardStack\Organization\OrganizationDomainsRequest $organizationDomainRequest */
$organizationDomainRequest = new \AllDigitalRewards\RewardStack\Organization\OrganizationDomainsRequest('TESTABC1');

/** @var \AllDigitalRewards\RewardStack\Organization\OrganizationDomainsResponse $organizationDomainResponse */
$organizationDomainResponse = $client->request($organizationDomainRequest);
print_r($organizationDomainResponse);
exit;
