<?php
require 'bootstrap.php';

//do something with $line
$createTransactionRequest = new \AllDigitalRewards\RewardStack\Transaction\CreateTransactionRequest(
    'TESTPARTICIPANT1');

/**
 * @var \AllDigitalRewards\RewardStack\Transaction\AbstractCollectionApiResponse $createTransactionRequest
 */
$createTransactionResponse = $client->request($createTransactionRequest);
print_r($createTransactionResponse);exit;