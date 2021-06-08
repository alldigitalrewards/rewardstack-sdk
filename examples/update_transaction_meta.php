<?php

$client = require_once __DIR__ . '/bootstrap.php';

use AllDigitalRewards\RewardStack\Transaction\AddTransactionMetaRequest;
use AllDigitalRewards\RewardStack\Transaction\AddTransactionMetaResponse;

$program = 'alldigitalrewards';
$participantUniqueId = 'ADRTESTP1';
$meta = [
    [
        "GAME_PLAY" => "WIN",
    ],
    [
        "CAMPAIGN" => "Campaign",
    ],
    [
        "GAME_PLAY_ENTRY" => 1,
    ]
];
$addTransactionMetaRequest = new AddTransactionMetaRequest(
    $program,
    $participantUniqueId,
    15,
    $meta
);

/** @var AddTransactionMetaResponse $addTransactionMetaResponse */
$addTransactionMetaResponse = $client->request($addTransactionMetaRequest);

print_r($addTransactionMetaResponse);
exit;
