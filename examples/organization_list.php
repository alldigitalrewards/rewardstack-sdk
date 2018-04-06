<?php
require 'bootstrap.php';

//do something with $line
$organizationListRequest = new \AllDigitalRewards\RewardStack\Organization\OrganizationListRequest();

/**
 * @var \AllDigitalRewards\RewardStack\Organization\AbstractCollectionApiResponse $organizationListRequest
 */
$organizationListResponse = $client->request($organizationListRequest);
print_r($organizationListResponse);exit;