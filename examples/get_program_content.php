<?php

/** @var Client $client */

use AllDigitalRewards\RewardStack\Client;
use AllDigitalRewards\RewardStack\Common\Entity\ProgramContentResponse;
use AllDigitalRewards\RewardStack\ProgramContent\ProgramContentRequest;

$client = require_once __DIR__ . '/bootstrap.php';

$content = new ProgramContentRequest('sharecare');
$content->setLang('en'); //or es
/** @var ProgramContentResponse $response */
$response = $client->request($content);

print_r($response);
exit;
