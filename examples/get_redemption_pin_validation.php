<?php

use AllDigitalRewards\RewardStack\RedemptionApi\RedemptionPinValidationRequest;

$client = require_once __DIR__ . '/bootstrap.php';

$subDomain = 'somecampaign';
$pin = 'HSsEVD81CuCfwyD';
$request = new RedemptionPinValidationRequest(
    $subDomain,
    $pin
);
$request->setLang('en_US');
$response = $client->request($request);
print_r($response);
exit;
