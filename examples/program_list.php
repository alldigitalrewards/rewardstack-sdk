<?php
require 'bootstrap.php';

//do something with $line
$programListrequest = new \AllDigitalRewards\RewardStack\Program\ProgramListRequest(
     'sharecare'
);

/**
 * @var \AllDigitalRewards\RewardStack\Program\AbstractCollectionApiResponse $createAdjustmentsRequest
 */
$programListResponse = $client->request($programListrequest);
print_r($programListResponse);exit;