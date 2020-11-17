<?php

$client = require_once __DIR__ . '/bootstrap.php';

/** @var \AllDigitalRewards\RewardStack\Transaction\SingleUserTransactionRequest $singleUserTransactionRequest */
$singleUserTransactionRequest = new \AllDigitalRewards\RewardStack\Transaction\SingleUserTransactionRequest(
    'alldigitalrewards',
    'ADRTESTP1',
    1
);

/** @var \AllDigitalRewards\RewardStack\Transaction\SingleUserTransactionResponse $singleUserTransactionResponse */
$singleUserTransactionResponse = $client->request($singleUserTransactionRequest);

print_r($singleUserTransactionResponse);
exit;
