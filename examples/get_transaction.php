<?php
require 'bootstrap.php';

$transactionRequest = new \AllDigitalRewards\RewardStack\Transaction\TransactionRequest('TESTPARTICIPANT1');

/**
 * @var \AllDigitalRewards\RewardStack\Transaction\AbstractCollectionApiResponse $transactionRequest
 */

$transactionResponse = $client->request($transactionRequest);
print_r($transactionResponse);exit;