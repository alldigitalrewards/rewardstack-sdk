<?php

use AllDigitalRewards\RewardStack\Program\CreateProgramRequest;
use AllDigitalRewards\RewardStack\Program\CreateProgramResponse;

$client = require_once __DIR__ . '/bootstrap.php';

$createProgramRequest = new CreateProgramRequest(
    'alldigitalrewards',
    'JOEADRTESTPROGRAM',
    'A Test Program',
    '1',
    '1231231234',
    'JOEADRTESTPROGRAM.mydigitalrewards.com',
    true
);


/** @var CreateProgramResponse $createProgramResponse */
$createProgramResponse = $client->request($createProgramRequest);
print_r($createProgramResponse);
exit;
