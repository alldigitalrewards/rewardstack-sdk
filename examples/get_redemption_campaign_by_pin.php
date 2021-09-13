<?php

use AllDigitalRewards\RewardStack\RedemptionApi\CampaignRetrieveByPinRequest;

$client = require_once __DIR__ . '/bootstrap.php';

$pin = 'HSsEVD81CuCfwyD';
$request = new CampaignRetrieveByPinRequest(
    $pin
);
$request->setLang('en_US');
$response = $client->request($request);
print_r($response);
exit;
