<?php

require 'bootstrap.php';

use \AllDigitalRewards\RewardStack\Request;

$uniqueId = 'TESTPARTICIPANT1';
$transactionId = 200;

/* Adjustment Request Test */
//$clientRequest = new Request\AdjustmentRequest('TESTPARTICIPANT1');
//$response = $client->request($request);

/* Single User Transaction Test */
//$clientRequest = new Request\SingleUserTransactionRequest($uniqueId,$transactionId);

/*  get Transaction test */
//$clientRequest = new Request\TransactionRequest($uniqueId);

/*  Create Adjustments  test */
//$clientRequest = new Request\CreateAdjustmentRequest($uniqueId, 'credit', 200);

// Create transaction
//$clientRequest = new Request\CreateTransactionRequest($uniqueId);


// SSO Transaction
//$clientRequest = new Request\SsoTokenRequest($uniqueId);

$response = $client->request($clientRequest);
var_dump($response);exit;