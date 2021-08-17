<?php

use AllDigitalRewards\RewardStack\Organization\OrganizationDomainsRequest;
use AllDigitalRewards\RewardStack\Organization\OrganizationDomainsResponse;

$client = require_once __DIR__ . '/bootstrap.php';

$organizationDomainRequest = new OrganizationDomainsRequest('TESTABC1');

/** @var OrganizationDomainsResponse $organizationDomainResponse */
$organizationDomainResponse = $client->request($organizationDomainRequest);
print_r($organizationDomainResponse);
exit;
