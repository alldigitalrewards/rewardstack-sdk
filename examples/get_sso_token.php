<?php

use AllDigitalRewards\RewardStack\Sso\SsoTokenResponse;

$client = require_once __DIR__ . '/bootstrap.php';

$createSsoRequest = new \AllDigitalRewards\RewardStack\Sso\SsoTokenRequest(
    'alldigitalrewards',
    'ADRTESTP1'
);

/**
 * @var SsoTokenResponse $ssoResponse
 */
$ssoResponse = $client->request($createSsoRequest);
print_r($ssoResponse);
exit;
