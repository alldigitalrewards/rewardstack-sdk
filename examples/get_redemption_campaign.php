<?php

use AllDigitalRewards\RewardStack\RedemptionApi\CampaignRetrieveRequest;

$client = require_once __DIR__ . '/bootstrap.php';

$pin = 'HSsEVD81CuCfwyD';
$request = new CampaignRetrieveRequest(
    $pin
);
$request->setLang('en_US');
$response = $client->request($request);
print_r($response);
exit;
