<?php

use AllDigitalRewards\RewardStack\Client;
use AllDigitalRewards\RewardStack\Transaction\SingleUserTransactionRequest;
use AllDigitalRewards\RewardStack\Transaction\SingleUserTransactionResponse;

/** @var Client $client */
$client = require_once __DIR__ . '/bootstrap.php';

$singleUserTransactionRequest = new SingleUserTransactionRequest(
    'alldigitalrewards',
    'ADRTESTP1',
    1
);

/** @var SingleUserTransactionResponse $singleUserTransactionResponse */
$singleUserTransactionResponse = $client->request($singleUserTransactionRequest);
print_r($singleUserTransactionResponse);
exit;
