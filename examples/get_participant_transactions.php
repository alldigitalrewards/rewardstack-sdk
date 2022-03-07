<?php

use AllDigitalRewards\RewardStack\Participant\ParticipantCollectionFilter;
use AllDigitalRewards\RewardStack\Transaction\ParticipantTransactionCollectionFilter;
use AllDigitalRewards\RewardStack\Transaction\TransactionRequest;
use AllDigitalRewards\RewardStack\Transaction\TransactionResponse;

$client = require_once __DIR__ . '/bootstrap.php';

/** @var TransactionRequest $transactionRequest */

$program = 'some-program';
$participantUniqueId = 'someparticipant';

$filter = new ParticipantTransactionCollectionFilter();
$filter->setIncentiveType('game');
$filter->setYear('2022');
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
