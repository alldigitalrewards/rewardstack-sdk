<?php

use AllDigitalRewards\RewardStack\Transaction\TransactionCollectionFilter;
use AllDigitalRewards\RewardStack\Transaction\TransactionCollectionRequest;
use AllDigitalRewards\RewardStack\Transaction\TransactionItemCollectionFilter;
use AllDigitalRewards\RewardStack\Transaction\TransactionItemCollectionRequest;
use AllDigitalRewards\RewardStack\Transaction\TransactionResponse;

$client = require_once __DIR__ . '/bootstrap.php';

/** @var TransactionItemCollectionRequest $transactionRequest */

$program = 'programuuid';
$participantUniqueId = 'participantuuid';

$filter = new TransactionItemCollectionFilter();
$filter->setYear('2022');//optional
$filter->setIncentiveType('game');//optional
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
