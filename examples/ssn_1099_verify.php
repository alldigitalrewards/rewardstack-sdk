<?php

/** @var Client $client */
$client = require_once __DIR__ . '/bootstrap.php';

use AllDigitalRewards\RewardStack\Client;
use AllDigitalRewards\RewardStack\Common\Entity\SuccessResponse;
use AllDigitalRewards\RewardStack\Ssn1099ParticipantApi\Ssn1099ParticipantVerifyRequest;

$organization = 'alldigitalrewards';
$program = 'alldigitalrewards';
$participantUniqueId = 'ADRTESTP1';

$verifyRequest = new Ssn1099ParticipantVerifyRequest(
    $organization,
    $program,
    $participantUniqueId
);
/** @var SuccessResponse $response */
$response = $client->request($verifyRequest);
print_r($response);
exit;
