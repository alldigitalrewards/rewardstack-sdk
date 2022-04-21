<?php

$client = require_once __DIR__ . '/bootstrap.php';

use AllDigitalRewards\RewardStack\Adjustment\AdjustmentCollectionFilter;
use AllDigitalRewards\RewardStack\Adjustment\AdjustmentListRequest;
use AllDigitalRewards\RewardStack\Adjustment\AdjustmentListResponse;
use AllDigitalRewards\RewardStack\Common\Entity\OrderBy;

$program = 'aprogram';
$participantUniqueId = 'aparticipant';
$orderBy = new OrderBy();
$orderBy->setField('adjustment.created_at');
$orderBy->setDirection('desc');
$filter = new AdjustmentCollectionFilter();
$filter->setOrderBy($orderBy);
$adjustmentRequest = new AdjustmentListRequest($program, $participantUniqueId, 1, 30, $filter);

/** @var AdjustmentListResponse $adjustmentResponse */
$adjustmentResponse = $client->request($adjustmentRequest);
print_r($adjustmentResponse);
exit;
