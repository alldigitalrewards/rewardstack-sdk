<?php

$client = require_once __DIR__ . '/bootstrap.php';

/** @var \AllDigitalRewards\RewardStack\Transaction\TransactionRequest $transactionRequest */
$transactionRequest = new \AllDigitalRewards\RewardStack\Transaction\TransactionRequest(
    'alldigitalrewards',
    'ADRTESTP1'
);

/** @var \AllDigitalRewards\RewardStack\Transaction\TransactionResponse $transactionResponse */
$transactionResponse = $client->request($transactionRequest);
print_r($transactionResponse);
exit;
