<?php
require 'bootstrap.php';

//do something with $line
$createProgramRequest = new \AllDigitalRewards\RewardStack\Program\CreateProgramRequest(
    'sharecare', 'ABC1234567', 'A super cool name2', '1000', '902109021','sharecare-demo.mydigitalrewards.com','24','testlogo'
);

/**
 * @var \AllDigitalRewards\RewardStack\Participant\AbstractCollectionApiResponse $createProgramRequest
 */
$createProgramresponse = $client->request($createProgramRequest);
print_r($createProgramresponse);exit;