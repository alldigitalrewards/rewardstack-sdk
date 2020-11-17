<?php

$client = require_once __DIR__ . '/bootstrap.php';

use AllDigitalRewards\RewardStack\Adjustment\AdjustmentRequest;
use AllDigitalRewards\RewardStack\Adjustment\AdjustmentResponse;

$program = 'alldigitalrewards';
$participantUniqueId = 'ADRTESTP1';
$adjustmentRequest = new AdjustmentRequest($program, $participantUniqueId);

/** @var AdjustmentResponse $adjustmentResponse */
$adjustmentResponse = $client->request($adjustmentRequest);
print_r($adjustmentResponse);
exit;
