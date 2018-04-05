<?php
require 'bootstrap.php';

$adjustmentRequest = new \AllDigitalRewards\RewardStack\Adjustment\AdjustmentRequest('TESTPARTICIPANT1');

/**
 * @var \AllDigitalRewards\RewardStack\Adjustment\AbstractCollectionApiResponse $adjustmentRequest
 */
$adjustmentResponse = $client->request($adjustmentRequest);

print_r($adjustmentResponse);exit;
