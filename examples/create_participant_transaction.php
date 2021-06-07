<?php

$client = require_once __DIR__ . '/bootstrap.php';
$addressRequest = new \AllDigitalRewards\RewardStack\Participant\AddressRequest();
$addressRequest->setFirstname('John');
$addressRequest->setLastname('Smith');
$addressRequest->setAddress1('123 Acme St.');
$addressRequest->setCity('Beverly Hills');
$addressRequest->setState('CA');
$addressRequest->setCountry('US');
$addressRequest->setZip('90210');
/** @var \AllDigitalRewards\RewardStack\Transaction\CreateTransactionRequest $createTransactionRequest */
$createTransactionRequest = new \AllDigitalRewards\RewardStack\Transaction\CreateTransactionRequest(
    'alldigitalrewards',
    'ADRTESTP1',
    [
        ['sku' => 'VVISA01', 'quantity' => 1, 'amount' => 10.00]
    ],
    $addressRequest
);

$createTransactionRequest->setLang('en');

/** @var \AllDigitalRewards\RewardStack\Transaction\CreateTransactionResponse $createTransactionResponse */
$createTransactionResponse = $client->request($createTransactionRequest);
print_r($createTransactionResponse);
exit;
