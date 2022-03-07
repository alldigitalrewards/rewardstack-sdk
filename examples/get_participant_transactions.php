<?php

use AllDigitalRewards\RewardStack\Transaction\TransactionCollectionFilter;
use AllDigitalRewards\RewardStack\Transaction\TransactionRequest;
use AllDigitalRewards\RewardStack\Transaction\TransactionResponse;

$client = require_once __DIR__ . '/bootstrap.php';

/** @var TransactionRequest $transactionRequest */

$program = 'someprogram';
$participantUniqueId = 'someparticipantuuid';

$filter = new TransactionCollectionFilter();
$filter->setYear('2022');//optional
$filter->setIncentiveType('egift');//optional
$transactionRequest = new TransactionRequest(
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
