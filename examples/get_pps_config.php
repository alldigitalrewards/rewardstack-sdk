<?php

$client = require_once __DIR__ . '/bootstrap.php';

use AllDigitalRewards\RewardStack\ProgramParticipantApi\ProgramParticipantConfigResponse;
use AllDigitalRewards\RewardStack\ProgramParticipantApi\ProgramParticipantConfigRequest;

$program = 'alldigitalrewards';
$participantRequest = new ProgramParticipantConfigRequest($program);

/** @var ProgramParticipantConfigResponse $configResponse */
$configResponse = $client->request($participantRequest);
print_r($configResponse);
exit;
