<?php

$client = require_once __DIR__ . '/bootstrap.php';

// @TODO needs review
// This is for fetching a program's layout

/** @var \AllDigitalRewards\RewardStack\Program\ProgramLayoutRequest $programLayoutRequest */
$programLayoutRequest = new \AllDigitalRewards\RewardStack\Program\ProgramLayoutRequest(
    'alldigitalrewards'
);
$programLayoutRequest->setLang('en');

try {
    /** @var \AllDigitalRewards\RewardStack\Program\ProgramLayoutResponse $programLayoutResponse */
    $programLayoutResponse = $client->request($programLayoutRequest);
    print_r($programLayoutResponse);
} catch(\GuzzleHttp\Exception\ServerException $exception) {
    print_r($exception->getResponse()->getBody()->getContents());
}
exit;
