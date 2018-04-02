# Skeleton Library

This is an ADR RewardStack SDK

## Install

Via Composer
```bash
$ composer require alldigitalrewards/rewardstack
```

## Usage

### Bootstrap
```php
<?php
require __DIR__ . '/vendor/autoload.php';

$credentials = new \AllDigitalRewards\RewardStack\Auth\Credentials(
    'username',
    'password'
);

$uri = new \GuzzleHttp\Psr7\Uri('https://admin.qa.alldigitalrewards.com');

$httpClient = new \GuzzleHttp\Client();

$authProxy = new \AllDigitalRewards\RewardStack\Auth\AuthProxy($credentials, $uri, $httpClient);

$client = new \AllDigitalRewards\RewardStack\Client($authProxy);

```

### Get a Participant
```php
<?php
$participantRequest = new \AllDigitalRewards\RewardStack\Request\ParticipantRequest('TESTPARTICIPANT1');

$participant = $client->request($participantRequest);
```

## Testing

```bash
$ composer test
```
 