<?php
$client = require_once __DIR__ . '/bootstrap.php';

/**
 * @var \AllDigitalRewards\RewardStack\Sso\SsoTokenRequest $createSsoRequest
 */
$createSsoRequest = new \AllDigitalRewards\RewardStack\Sso\SsoTokenRequest(
    'alldigitalrewards',
    'ADRTESTP1'
);

/**
 * @var \AllDigitalRewards\RewardStack\Sso\SsoTokenResponse $ssoResponse
 */
$ssoResponse = $client->request($createSsoRequest);
print_r($ssoResponse);
exit;
