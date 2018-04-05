<?php

require 'bootstrap.php';

$singleUserTransactionRequest = new \AllDigitalRewards\RewardStack\Transaction\SingleUserTransactionRequest('TESTPARTICIPANT1','200');

$singleUserTransactionResponse = $client->request($singleUserTransactionRequest);

print_r($singleUserTransactionResponse);exit;