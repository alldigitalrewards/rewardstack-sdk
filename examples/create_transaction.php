<?php
require 'bootstrap.php';

//do something with $line
$createTransactionRequest = new \AllDigitalRewards\RewardStack\Request\CreateTransactionRequest(
    'TESTPARTICIPANT1');

/**
 * @var \AllDigitalRewards\RewardStack\Response\AbstractCollectionApiResponse $createTransactionRequest
 */
$createTransactionResponse = $client->request($createTransactionRequest);
print_r($createTransactionResponse);exit;