<?php

use AllDigitalRewards\RewardStack\Program\ProgramRequest;
use AllDigitalRewards\RewardStack\Program\ProgramResponse;

$client = require_once __DIR__ . '/bootstrap.php';

// This is for updating a program

$programRequest = new ProgramRequest(
    '627c1758e8f84',
    'All Digital Rewards Test',
    '1',
    '12312312345',
    'alldigitalrewards-test.mydigitalrewards.com',
    1,
    '/testurl',
    'alldigitalrewards'
);
$programRequest->setEnableEmailLogin(false);
/** @var ProgramResponse $programResponse */
$programResponse = $client->request($programRequest);
print_r($programResponse);
exit;
