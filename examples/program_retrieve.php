<?php
require 'bootstrap.php';

//do something with $line
$programRetrieveRequest = new \AllDigitalRewards\RewardStack\Program\ProgramRetrieveRequest(
    'sharecare'
);

/**
 * @var \AllDigitalRewards\RewardStack\Program\AbstractCollectionApiResponse $programRetrieveRequest
 */
$programRetrieveResponse = $client->request($programRetrieveRequest);
print_r($programRetrieveResponse);exit;