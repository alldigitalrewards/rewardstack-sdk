<?php

use AllDigitalRewards\RewardStack\Client;
use AllDigitalRewards\RewardStack\Common\Entity\Transaction;
use AllDigitalRewards\RewardStack\Transaction\TransactionSingleRequest;

/** @var Client $client */
$client = require_once __DIR__ . '/bootstrap.php';

$singleUserTransactionRequest = new TransactionSingleRequest(
    'alldigitalrewards',
    'testuuid',
    1
);

/** @var Transaction $singleUserTransactionResponse */
$singleUserTransactionResponse = $client->request($singleUserTransactionRequest);
print_r($singleUserTransactionResponse);
exit;
