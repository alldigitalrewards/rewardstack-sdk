<?php
require 'bootstrap.php';

$participantCollectionRequest = new \AllDigitalRewards\RewardStack\Participant\ParticipantCollectionRequest();

/**
 * @var \AllDigitalRewards\RewardStack\Participant\AbstractCollectionApiResponse $participantCollection
 */
$participantCollection = $client->request($participantCollectionRequest);

echo count($participantCollection);
