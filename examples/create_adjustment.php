<?php
require 'bootstrap.php';

//do something with $line
$createAdjustmentsRequest = new \AllDigitalRewards\RewardStack\Adjustment\CreateAdjustmentRequest(
    'TESTPARTICIPANT1',
    'credit','200'
);

/**
 * @var \AllDigitalRewards\RewardStack\Adjustment\AbstractCollectionApiResponse $createAdjustmentsRequest
 */
$createAdjustmentsResponse = $client->request($createAdjustmentsRequest);
print_r($createAdjustmentsResponse);exit;