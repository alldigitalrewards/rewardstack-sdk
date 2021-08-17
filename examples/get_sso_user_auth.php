<?php

use AllDigitalRewards\RewardStack\Client;
use AllDigitalRewards\RewardStack\Sso\SsoTokenRequest;
use AllDigitalRewards\RewardStack\Sso\SsoTokenResponse;
use AllDigitalRewards\RewardStack\Sso\SsoUserAuthRequest;

/** @var Client $client */
$client = require_once __DIR__ . '/bootstrap.php';

$createSsoRequest = new SsoTokenRequest(
    'alldigitalrewards',
    'ADRTESTP1'
);

/**
 * @var SsoTokenResponse $ssoResponse
 */
$ssoResponse = $client->request($createSsoRequest);
$token = $ssoResponse->getToken();
$participantAuth = new SsoUserAuthRequest(
    'alldigitalrewards',
    'ADRTESTP1',
    $token
);
$participantAuthResponse = $client->request($participantAuth); //returns a participant
print_r($participantAuthResponse);
exit;
