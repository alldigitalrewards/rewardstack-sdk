<?php
require 'bootstrap.php';

$organizationRequest = new \AllDigitalRewards\RewardStack\Organization\OrganizationRequest('14213123','abc123a123','ABC123A123','ABC123A123 Name',["sharecare-1reward-test.com", "sharecarerewards1.com"]);
/**
 * @var \AllDigitalRewards\RewardStack\Transaction\AbstractCollectionApiResponse $organizationRequest
 */

$organizationResponse = $client->request($organizationRequest);
print_r($organizationResponse);exit;