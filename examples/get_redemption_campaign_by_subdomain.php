<?php

use AllDigitalRewards\RewardStack\RedemptionApi\CampaignRetrieveBySubdomainRequest;

$client = require_once __DIR__ . '/bootstrap.php';

$subdomain = 'newmarketingrevcamp';
$request = new CampaignRetrieveBySubdomainRequest(
    $subdomain
);
$request->setLang('en_US');
$response = $client->request($request);
print_r($response);
exit;
