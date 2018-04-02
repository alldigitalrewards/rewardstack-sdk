<?php
require 'bootstrap.php';

//do something with $line
$createSweepstakesEntryRequest = new \AllDigitalRewards\RewardStack\Request\CreateSweepstakesEntryRequest(
    'TESTPARTICIPANT1',
    1
);

/**
 * @var \AllDigitalRewards\RewardStack\Response\AbstractCollectionApiResponse $createSweepstakesEntryResponse
 */
$createSweepstakesEntryResponse = $client->request($createSweepstakesEntryRequest);
