<?php

$client = require_once __DIR__ . '/bootstrap.php';

use AllDigitalRewards\RewardStack\Adjustment\AdjustmentListRequest;
use AllDigitalRewards\RewardStack\Adjustment\AdjustmentListResponse;

$program = 'alldigitalrewards';
$participantUniqueId = 'ADRTESTP1';
$adjustmentRequest = new AdjustmentListRequest($program, $participantUniqueId);

/** @var AdjustmentListResponse $adjustmentResponse */
$adjustmentResponse = $client->request($adjustmentRequest);
print_r($adjustmentResponse);
exit;
