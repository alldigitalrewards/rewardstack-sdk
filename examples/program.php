<?php

$client = require_once __DIR__ . '/bootstrap.php';

// This is for updating a program

/** @var \AllDigitalRewards\RewardStack\Program\ProgramRequest $programRequest */
$programRequest = new \AllDigitalRewards\RewardStack\Program\ProgramRequest(
    '565665',
    'All Digital Rewards Test',
    '1',
    '12312312345',
    'alldigitalrewards-test.mydigitalrewards.com',
    '24',
    '/testurl',
    'alldigitalrewards'
);

/** @var \AllDigitalRewards\RewardStack\Program\ProgramResponse $programResponse */
$programResponse = $client->request($programRequest);
print_r($programResponse);
exit;
