<?php
require 'bootstrap.php';

//do something with $line
$organizationRetrieveRequest = new \AllDigitalRewards\RewardStack\Organization\OrganizationRetrieveRequest('sharecare');

/**
 * @var \AllDigitalRewards\RewardStack\Organization\AbstractCollectionApiResponse $organizationRetrieveRequest
 */
$organizationReteriveResponse = $client->request($organizationRetrieveRequest);
print_r($organizationReteriveResponse);exit;