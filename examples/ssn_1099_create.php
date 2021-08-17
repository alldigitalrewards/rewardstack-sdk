<?php

/** @var Client $client */
$client = require_once __DIR__ . '/bootstrap.php';

use AllDigitalRewards\RewardStack\Client;
use AllDigitalRewards\RewardStack\Common\Entity\SuccessResponse;
use AllDigitalRewards\RewardStack\Ssn1099ParticipantApi\Ssn1099ParticipantSaveRequest;
use AllDigitalRewards\RewardStack\Ssn1099ParticipantApi\Ssn1099ParticipantVerifyRequest;

$organization = 'alldigitalrewards';
$program = 'alldigitalrewards';
$participantUniqueId = 'ADRTESTP1';
$ssn = '123-23-1900';

$verifyRequest = new Ssn1099ParticipantSaveRequest(
    $organization,
    $program,
    $participantUniqueId,
    $ssn
);
/** @var SuccessResponse $response */
$response = $client->request($verifyRequest);
print_r($response);
exit;
