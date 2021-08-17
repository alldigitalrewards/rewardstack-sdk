<?php

use AllDigitalRewards\RewardStack\Participant\CreateSweepstakesEntryRequest;
use AllDigitalRewards\RewardStack\Participant\CreateSweepstakesEntryResponse;

$client = require_once __DIR__ . '/bootstrap.php';

$createSweepstakesEntryRequest = new CreateSweepstakesEntryRequest(
    'alldigitalrewards',
    'TESTPARTICIPANT1',
    2
);

/** @var CreateSweepstakesEntryResponse $createSweepstakesEntryResponse */
$createSweepstakesEntryResponse = $client->request($createSweepstakesEntryRequest);
print_r($createSweepstakesEntryResponse);
exit;
