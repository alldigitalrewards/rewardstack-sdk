<?php
require 'bootstrap.php';

$participantCollectionRequest = new \AllDigitalRewards\RewardStack\Request\ParticipantCollectionRequest();

/**
 * @var \AllDigitalRewards\RewardStack\Response\AbstractCollectionApiResponse $participantCollection
 */
$participantCollection = $client->request($participantCollectionRequest);

echo count($participantCollection);
