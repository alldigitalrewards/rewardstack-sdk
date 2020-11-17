<?php
$client = require_once __DIR__ . '/bootstrap.php';

/** @var \AllDigitalRewards\RewardStack\Participant\CreateSweepstakesEntryRequest $createSweepstakesEntryRequest */
$createSweepstakesEntryRequest = new \AllDigitalRewards\RewardStack\Participant\CreateSweepstakesEntryRequest(
    'alldigitalrewards',
    'TESTPARTICIPANT1',
    2
);

/** @var \AllDigitalRewards\RewardStack\Participant\CreateSweepstakesEntryResponse $createSweepstakesEntryResponse */
$createSweepstakesEntryResponse = $client->request($createSweepstakesEntryRequest);
print_r($createSweepstakesEntryResponse);
exit;
