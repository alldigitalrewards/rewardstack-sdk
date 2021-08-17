<?php

use AllDigitalRewards\RewardStack\Program\ProgramRequest;
use AllDigitalRewards\RewardStack\Program\ProgramResponse;

$client = require_once __DIR__ . '/bootstrap.php';

// This is for updating a program

$programRequest = new ProgramRequest(
    '565665',
    'All Digital Rewards Test',
    '1',
    '12312312345',
    'alldigitalrewards-test.mydigitalrewards.com',
    '24',
    '/testurl',
    'alldigitalrewards'
);

/** @var ProgramResponse $programResponse */
$programResponse = $client->request($programRequest);
print_r($programResponse);
exit;
