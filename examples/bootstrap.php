<?php

require __DIR__ . '/../vendor/autoload.php';

use AllDigitalRewards\RewardStack\Auth\Credentials;
use GuzzleHttp\Psr7\Uri;
use GuzzleHttp\Client;
use AllDigitalRewards\RewardStack\Auth\AuthProxy;
use AllDigitalRewards\RewardStack\Client as RewardStackClient;

$credentials = new Credentials(
    'test@alldigitalrewards.com',
    'password'
);

$uri = new Uri('https://admin.adrqa.info');
$httpClient = new Client();
$authProxy = new AuthProxy($credentials, $uri, $httpClient);
return new RewardStackClient($authProxy);
