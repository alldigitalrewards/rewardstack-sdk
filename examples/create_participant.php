<?php
require 'bootstrap.php';

//do something with $line
$createParticipantRequest = new \AllDigitalRewards\RewardStack\Participant\CreateParticipantRequest(
    'sharecare', 'TRANSACT', 'John', 'Smith', 'zech+sweepstake1@alldigitalrewards.com'
);

/**
 * @var \AllDigitalRewards\RewardStack\Participant\AbstractCollectionApiResponse $createParticipantRequest
 */
$createParticipantResponse = $client->request($createParticipantRequest);
print_r($createParticipantResponse);exit;