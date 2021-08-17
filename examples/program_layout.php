<?php

use AllDigitalRewards\RewardStack\Program\ProgramLayoutRequest;
use AllDigitalRewards\RewardStack\Program\ProgramLayoutResponse;
use GuzzleHttp\Exception\ServerException;

$client = require_once __DIR__ . '/bootstrap.php';

// @TODO needs review
// This is for fetching a program's layout

$programLayoutRequest = new ProgramLayoutRequest(
    'sharecare'
);
$programLayoutRequest->setLang('en');

try {
    /** @var ProgramLayoutResponse $programLayoutResponse */
    $programLayoutResponse = $client->request($programLayoutRequest);
    print_r($programLayoutResponse);
} catch (ServerException $exception) {
    print_r($exception->getResponse()->getBody()->getContents());
}
exit;
