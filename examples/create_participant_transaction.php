<?php

use AllDigitalRewards\RewardStack\Participant\AddressRequest;
use AllDigitalRewards\RewardStack\Transaction\CreateTransactionRequest;
use AllDigitalRewards\RewardStack\Transaction\CreateTransactionResponse;

$client = require_once __DIR__ . '/bootstrap.php';
$addressRequest = new AddressRequest();
$addressRequest->setFirstname('John');
$addressRequest->setLastname('Smith');
$addressRequest->setAddress1('123 Acme St.');
$addressRequest->setCity('Beverly Hills');
$addressRequest->setState('CA');
$addressRequest->setCountry('US');
$addressRequest->setZip('90210');
$createTransactionRequest = new CreateTransactionRequest(
    'alldigitalrewards',
    'ADRTESTP1',
    [
        ['sku' => 'PVISA01', 'quantity' => 1, 'amount' => 10.00]
    ],
    $addressRequest,
    [
        'transaction_source' => 'CLIENT-CAMPAIGN-Y',
        'meta' => [
            ['META_KEY' => 'META_VALUE']
        ]
    ]
);

$createTransactionRequest->setLang('en');

/** @var CreateTransactionResponse $createTransactionResponse */
$createTransactionResponse = $client->request($createTransactionRequest);
print_r($createTransactionResponse);
exit;
