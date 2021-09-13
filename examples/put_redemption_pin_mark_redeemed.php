<?php

use AllDigitalRewards\RewardStack\RedemptionApi\PinMarkRedeemedRequest;

$client = require_once __DIR__ . '/bootstrap.php';

$subDomain = 'somecampaign';
$pin = 'HSsEVD81CuCfwyD';
$transactionGuid = 'some-guid-here';
$request = new PinMarkRedeemedRequest(
    $subDomain,
    $pin,
    $transactionGuid
);
$response = $client->request($request);
print_r($response);
exit;
