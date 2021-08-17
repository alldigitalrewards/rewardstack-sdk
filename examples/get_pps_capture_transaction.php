<?php

$client = require_once __DIR__ . '/bootstrap.php';

use AllDigitalRewards\RewardStack\Common\Entity\SuccessResponse;
use AllDigitalRewards\RewardStack\ProgramParticipantApi\ProgramParticipantAuthIdResponse;
use AllDigitalRewards\RewardStack\ProgramParticipantApi\ProgramParticipantAuthorizePointBalanceTokenRequest;
use AllDigitalRewards\RewardStack\ProgramParticipantApi\ProgramParticipantCaptureTransactionRequest;

$program = 'alldigitalrewards';
$participantUniqueId = 'ADRTESTP1';
$amount = '100.00';
$participantAuthRequest = new ProgramParticipantAuthorizePointBalanceTokenRequest(
    $program,
    $participantUniqueId,
    $amount
);

/** @var ProgramParticipantAuthIdResponse $authIdResponse */
$authIdResponse = $client->request($participantAuthRequest);
$authId = $authIdResponse->getAuthorizationId();
print_r($authId);


$captureTransaction = new ProgramParticipantCaptureTransactionRequest(
    $program,
    $participantUniqueId,
    $authId,
    $amount,
    '1001001'
);
/** @var SuccessResponse $captureTransactionResponse */
$captureTransactionResponse = $client->request($captureTransaction);
print_r($captureTransactionResponse);
exit;
