<?php
require 'bootstrap.php';

//do something with $line
$programListRequest = new \AllDigitalRewards\RewardStack\Program\ProgramListRequest(
     'sharecare'
);

/**
 * @var \AllDigitalRewards\RewardStack\Program\AbstractCollectionApiResponse $programListRequest
 */
$programListResponse = $client->request($programListRequest);
print_r($programListResponse);exit;