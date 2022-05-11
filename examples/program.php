<?php

use AllDigitalRewards\RewardStack\Program\ProgramRequest;
use AllDigitalRewards\RewardStack\Program\ProgramResponse;

$client = require_once __DIR__ . '/bootstrap.php';

// This is for updating a program

$programRequest = new ProgramRequest(
    '627c1f5d7f13e',
    'All Digital Rewards Test',
    '1',
    '12312312345',
    'alldigitalrewards-test.mydigitalrewards.com',
    1,
    '/testurl',
    'alldigitalrewards'
);
$programRequest->disableEmailLogin();
/** @var ProgramResponse $programResponse */
$programResponse = $client->request($programRequest);
print_r($programResponse);
exit;
