<?php
require 'bootstrap.php';

//do something with $line
$createSsoRequest = new \AllDigitalRewards\RewardStack\Sso\SsoTokenRequest(
    'TESTPARTICIPANT1');

/**
 * @var \AllDigitalRewards\RewardStack\Transaction\AbstractCollectionApiResponse $createSsoRequest
 */
$ssoResponse = $client->request($createSsoRequest);
print_r($ssoResponse);exit;