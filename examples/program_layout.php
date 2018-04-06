<?php
require 'bootstrap.php';

//do something with $line
$programLayoutRequest = new \AllDigitalRewards\RewardStack\Program\ProgramLayoutRequest(
    'sharecare'
);

/**
 * @var \AllDigitalRewards\RewardStack\Program\AbstractCollectionApiResponse $programLayoutRequest
 */
$programLayoutResponse = $client->request($programLayoutRequest);
print_r($programLayoutResponse);exit;