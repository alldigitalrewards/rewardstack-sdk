<?php
require 'bootstrap.php';

//do something with $line
$organizationDomainRequest = new \AllDigitalRewards\RewardStack\Organization\OrganizationDomainsRequest('sharecare');

/**
 * @var \AllDigitalRewards\RewardStack\Organization\AbstractCollectionApiResponse $organizationDomainRequest
 */
$organizationDomainResponse = $client->request($organizationDomainRequest);
print_r($organizationDomainResponse);exit;