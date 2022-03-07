<?php

$client = require_once __DIR__ . '/bootstrap.php';

use AllDigitalRewards\RewardStack\Transaction\TransactionResponse;
use AllDigitalRewards\RewardStack\Transaction\ParticipantTransactionCollectionRequest;

$program = 'some-program';
$uuid = 'someuuid';

$transactionCollectionRequest = new ParticipantTransactionCollectionRequest(
    $program,
    $uuid
);
/** @var TransactionResponse $transactionCollection */
$transactionCollection = $client->request($transactionCollectionRequest);
print_r($transactionCollection);
exit;
