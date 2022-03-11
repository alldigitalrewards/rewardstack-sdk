<?php

use AllDigitalRewards\RewardStack\Transaction\TransactionCollectionFilter;
use AllDigitalRewards\RewardStack\Transaction\TransactionCollectionRequest;
use AllDigitalRewards\RewardStack\Transaction\TransactionResponse;

$client = require_once __DIR__ . '/bootstrap.php';

/** @var TransactionCollectionRequest $transactionRequest */

$program = 'programuuid';
$participantUniqueId = 'participantuuid';

$filter = new TransactionCollectionFilter();
$filter->setYear('2022');//optional
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
