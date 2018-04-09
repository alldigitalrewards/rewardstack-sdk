<?php
require 'bootstrap.php';

//do something with $line
$createSweepstakesEntryRequest = new \AllDigitalRewards\RewardStack\Participant\CreateSweepstakesEntryRequest(
    'TESTPARTICIPANT1',
    2
);

/**
 * @var \AllDigitalRewards\RewardStack\Participant\AbstractCollectionApiResponse $createSweepstakesEntryResponse
 */
$createSweepstakesEntryResponse = $client->request($createSweepstakesEntryRequest);
print_r($createSweepstakesEntryResponse);exit;