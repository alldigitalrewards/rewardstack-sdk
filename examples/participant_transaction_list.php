<?php

$client = require_once __DIR__ . '/bootstrap.php';

use AllDigitalRewards\RewardStack\Transaction\TransactionResponse;
use AllDigitalRewards\RewardStack\Transaction\ParticipantTransactionCollectionRequest;

$program = '12121212';
$uuid = 'TESTPARTICIPANT1';

$transactionCollectionRequest = new ParticipantTransactionCollectionRequest(
    $program,
    $uuid
);
/** @var TransactionResponse $transactionCollection */
$transactionCollection = $client->request($transactionCollectionRequest);
print_r($transactionCollection);
exit;
