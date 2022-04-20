<?php

use AllDigitalRewards\RewardStack\Common\Entity\OrderBy;
use AllDigitalRewards\RewardStack\Transaction\TransactionItemCollectionFilter;
use AllDigitalRewards\RewardStack\Transaction\TransactionItemCollectionRequest;
use AllDigitalRewards\RewardStack\Transaction\TransactionResponse;

$client = require_once __DIR__ . '/bootstrap.php';

/** @var TransactionItemCollectionRequest $transactionRequest */

$program = 'aprogram';
$participantUniqueId = 'aparticipant';

$filter = new TransactionItemCollectionFilter();
$orderBy = new OrderBy();
$orderBy->setField('transaction.created_at');
$orderBy->setDirection('asc');
$filter->setOrderBy($orderBy);
$transactionRequest = new TransactionItemCollectionRequest(
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
