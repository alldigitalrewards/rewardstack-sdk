<?php

use AllDigitalRewards\RewardStack\Common\Entity\Transaction;
use AllDigitalRewards\RewardStack\Transaction\TransactionCollectionFilter;
use AllDigitalRewards\RewardStack\Transaction\TransactionCollectionRequest;
use AllDigitalRewards\RewardStack\Transaction\TransactionItemCollectionFilter;
use AllDigitalRewards\RewardStack\Transaction\TransactionItemCollectionRequest;
use AllDigitalRewards\RewardStack\Transaction\TransactionItemSingleRequest;

$client = require_once __DIR__ . '/bootstrap.php';

/** @var TransactionItemCollectionRequest $transactionRequest */

$program = 'programuuid';
$participantUniqueId = 'participantuuid';

$transactionRequest = new TransactionItemSingleRequest(
    $program,
    $participantUniqueId,
    'a14f3b90-9fe2-11ec-b3ec-0242c0a81015'
);

/** @var Transaction $transactionResponse */
$transactionResponse = $client->request($transactionRequest);
print_r($transactionResponse);
exit;
