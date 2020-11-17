<?php

$client = require_once __DIR__ . '/bootstrap.php';

use AllDigitalRewards\RewardStack\Adjustment\CreateAdjustmentRequest;
use AllDigitalRewards\RewardStack\Adjustment\CreateAdjustmentResponse;

$program = 'alldigitalrewards';
$participantUniqueId = 'ADRTESTP1';
$adjustmentType = 'credit';
$adjustmentAmount = 200;

$createAdjustmentsRequest = new CreateAdjustmentRequest(
    $program,
    $participantUniqueId,
    $adjustmentType,
    $adjustmentAmount
);

/** @var CreateAdjustmentResponse $createAdjustmentsResponse */
$createAdjustmentsResponse = $client->request($createAdjustmentsRequest);
print_r($createAdjustmentsResponse);
exit;
