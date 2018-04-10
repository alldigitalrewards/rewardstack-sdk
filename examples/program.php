<?php
require 'bootstrap.php';

//do something with $line
$programRequest = new \AllDigitalRewards\RewardStack\Program\ProgramRequest('sharecare','A super cool name','1005','12312312345','sharecare-demo.mydigitalrewards.com','24','/testurl'
,'sharecare');

/**
 * @var \AllDigitalRewards\RewardStack\Program\AbstractCollectionApiResponse $programRequest
 */
$programResponse = $client->request($programRequest);
print_r($programResponse);exit;