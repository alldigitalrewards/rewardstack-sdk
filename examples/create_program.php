<?php
$client = require_once __DIR__ . '/bootstrap.php';

/** @var \AllDigitalRewards\RewardStack\Program\CreateProgramRequest $createProgramRequest */
$createProgramRequest = new \AllDigitalRewards\RewardStack\Program\CreateProgramRequest(
    'alldigitalrewards',
    'ADRTESTPROGRAM',
    'A Test Program',
    '1',
    '1231231234',
    'somewhere-over-the-rainbow.mydigitalrewards.com',
    true,
    'testlogo'
);


/** @var \AllDigitalRewards\RewardStack\Program\CreateProgramResponse $createProgramResponse */
$createProgramResponse = $client->request($createProgramRequest);
print_r($createProgramResponse);
exit;
