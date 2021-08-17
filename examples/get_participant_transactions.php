<?php

use AllDigitalRewards\RewardStack\Transaction\TransactionRequest;
use AllDigitalRewards\RewardStack\Transaction\TransactionResponse;

$client = require_once __DIR__ . '/bootstrap.php';

/** @var TransactionRequest $transactionRequest */

$program = 'alldigitalrewards';
$participantUniqueId = 'ADRTESTP1';

$transactionRequest = new TransactionRequest(
    $program,
    $participantUniqueId
);

/** @var TransactionResponse $transactionResponse */
$transactionResponse = $client->request($transactionRequest);
print_r($transactionResponse);
exit;
