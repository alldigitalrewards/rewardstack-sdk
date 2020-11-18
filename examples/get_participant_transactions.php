<?php

$client = require_once __DIR__ . '/bootstrap.php';

/** @var \AllDigitalRewards\RewardStack\Transaction\TransactionRequest $transactionRequest */

$program = 'alldigitalrewards';
$participantUniqueId = 'ADRTESTP1';

$transactionRequest = new \AllDigitalRewards\RewardStack\Transaction\TransactionRequest(
    $program,
    $participantUniqueId
);

/** @var \AllDigitalRewards\RewardStack\Transaction\TransactionResponse $transactionResponse */
$transactionResponse = $client->request($transactionRequest);
print_r($transactionResponse);
exit;
