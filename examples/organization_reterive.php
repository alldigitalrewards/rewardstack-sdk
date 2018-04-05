<?php
require 'bootstrap.php';

//do something with $line
$organizationReteriveRequest = new \AllDigitalRewards\RewardStack\Organization\OrganizationReteriveRequest('sharecare');

/**
 * @var \AllDigitalRewards\RewardStack\Organization\AbstractCollectionApiResponse $organizationReteriveRequest
 */
$organizationReteriveResponse = $client->request($organizationReteriveRequest);
print_r($organizationReteriveResponse);exit;