<?php
require __DIR__.'/../vendor/autoload.php';

var_dump($_SERVER, $_ENV);

$client = \Aws\Sqs\SqsClient::factory(array(
    'version'     => 'latest',
    'region'      => 'eu-west-1',
    'credentials' => [
        'key'    => $_SERVER['AWS_KEY'],
        'secret' => $_SERVER['AWS_SECRET'],
    ],
));

$client->sendMessage(array(
    'QueueUrl'    => $_SERVER['AWS_QUEUE'],
    'MessageBody' => 'An awesome message!',
));

exit(0);
