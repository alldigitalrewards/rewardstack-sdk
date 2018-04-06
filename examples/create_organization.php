<?php
require 'bootstrap.php';

//do something with $line
$createOrganizationRequest = new \AllDigitalRewards\RewardStack\Organization\CreateOrganizationRequest('TESTABC1', 'TestABC #1', 'Over the Rainbow','1233211230', '123 Acme St', '','Beverly Hills','CA','90210','');

/**
 * @var \AllDigitalRewards\RewardStack\Organization\AbstractCollectionApiResponse $createOrganizationRequest
 */
$createOrganizationResponse = $client->request($createOrganizationRequest);
print_r($createOrganizationResponse);exit;