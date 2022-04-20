<?php

use AllDigitalRewards\RewardStack\Common\Entity\OrderBy;
use AllDigitalRewards\RewardStack\Transaction\TransactionCollectionFilter;
use AllDigitalRewards\RewardStack\Transaction\TransactionCollectionRequest;
use AllDigitalRewards\RewardStack\Transaction\TransactionResponse;

$client = require_once __DIR__ . '/bootstrap.php';

/** @var TransactionCollectionRequest $transactionRequest */

$program = 'aprogram';
$participantUniqueId = 'aparticipant';

$filter = new TransactionCollectionFilter();
$orderBy = new OrderBy();
$orderBy->setField('transaction.created_at');
$orderBy->setDirection('desc');
$filter->setOrderBy($orderBy);
$transactionRequest = new TransactionCollectionRequest(
    $program,
    $participantUniqueId,
    1,
    30,
    $filter
);

/** @var TransactionResponse $transactionResponse */
$transactionResponse = $client->request($transactionRequest);
print_r($transactionResponse);
exit;
