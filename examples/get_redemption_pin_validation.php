<?php

use AllDigitalRewards\RewardStack\RedemptionApi\PinValidationRequest;

$client = require_once __DIR__ . '/bootstrap.php';

$subDomain = 'somecampaign';
$pin = 'HSsEVD81CuCfwyD';
$request = new PinValidationRequest(
    $subDomain,
    $pin
);
$request->setLang('en_US');
$response = $client->request($request);
print_r($response);
exit;
