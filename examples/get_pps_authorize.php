<?php

$client = require_once __DIR__ . '/bootstrap.php';

use AllDigitalRewards\RewardStack\ProgramParticipantApi\ProgramParticipantAuthIdResponse;
use AllDigitalRewards\RewardStack\ProgramParticipantApi\ProgramParticipantAuthorizePointBalanceTokenRequest;

$program = '1001';
$participantUniqueId = '1586502';
$amount = '100.00';
$participantRequest = new ProgramParticipantAuthorizePointBalanceTokenRequest($program, $participantUniqueId, $amount);

/** @var ProgramParticipantAuthIdResponse $authIdResponse */
$authIdResponse = $client->request($participantRequest);
print_r($authIdResponse);
exit;
