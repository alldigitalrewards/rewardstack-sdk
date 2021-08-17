<?php

/** @var Client $client */

use AllDigitalRewards\RewardStack\AVS\AddressValidationRequest;
use AllDigitalRewards\RewardStack\Client;
use AllDigitalRewards\RewardStack\Common\Entity\AvsAddress;
use AllDigitalRewards\RewardStack\Common\Entity\SuccessResponse;

$client = require_once __DIR__ . '/bootstrap.php';

$avsAddress = new AvsAddress();
$avsAddress->setAddress1('123 Anywhere St.');
$avsAddress->setCity('Anytown');
$avsAddress->setState('CA');
$avsAddress->setPostalCode('12345');
$avsAddress->setCountry('US');

$avsAddressRequest = new AddressValidationRequest($avsAddress);

/** @var SuccessResponse $response */
$response = $client->request($avsAddressRequest);
print_r($response);
exit;
