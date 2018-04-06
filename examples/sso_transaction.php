<?php
require 'bootstrap.php';

//do something with $line
$createSsoRequest = new \AllDigitalRewards\RewardStack\Transaction\SsoTokenRequest(
    'TESTPARTICIPANT1');

/**
 * @var \AllDigitalRewards\RewardStack\Transaction\AbstractCollectionApiResponse $createTransactionRequest
 */
$ssoResponse = $client->request($createSsoRequest);
print_r($ssoResponse);exit;