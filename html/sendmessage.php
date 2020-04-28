<?php
/**
 * Copyright 2010-2019 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * This file is licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License. A copy of
 * the License is located at
 *
 * http://aws.amazon.com/apache2.0/
 *
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *
 *  ABOUT THIS PHP SAMPLE: This sample is part of the SDK for PHP Developer Guide topic at
 * https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/sqs-examples-send-receive-messages.html
 *
 */
// snippet-start:[sqs.php.send_message.complete]
// snippet-start:[sqs.php.send_message.import]
require '/var/www/html/vendor/autoload.php';
// snippet-end:[sqs.php.send_message.import]

/**
 * Receive SQS Queue with Long Polling
 *
 * This code expects that you have AWS credentials set up per:
 * https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/guide_credentials.html
 */
 
// snippet-start:[sqs.php.send_message.main]
use Aws\Sqs\SqsClient;

$client = SqsClient::factory(array(
    'profile' => 'default',
    'region'  => 'us-east-2'
));
$params = [
    'DelaySeconds' => 10,
    'MessageAttributes' => [
        "OrderID" => [
            'DataType' => "String",
            'StringValue' => "22"
        ],
        "Name" => [
            'DataType' => "String",
            'StringValue' => "Ryan Granahan"
        ],
        "PhoneNumber" => [
            'DataType' => "String",
            'StringValue' => "6105734732"
        ]
    ],
    'MessageBody' => "This is a test of the order system",
    'QueueUrl' => 'https://sqs.us-east-2.amazonaws.com/878934981528/orders'
];

try {
    $result = $client->sendMessage($params);
    var_dump($result);
} catch (AwsException $e) {
    // output error message if fails
    error_log($e->getMessage());
}
 
 
// snippet-end:[sqs.php.send_message.main]
// snippet-end:[sqs.php.send_message.complete]
// snippet-comment:[These are tags for the AWS doc team's sample catalog. Do not remove.]
// snippet-sourcedescription:[SendMessage.php demonstrates how to deliver a message to the specified queue.]
// snippet-keyword:[PHP]
// snippet-sourcesyntax:[php]
// snippet-keyword:[AWS SDK for PHP v3]
// snippet-keyword:[Code Sample]
// snippet-keyword:[Amazon Simple Queue Service]
// snippet-service:[sqs]
// snippet-sourcetype:[full-example]
// snippet-sourcedate:[2018-12-27]
// snippet-sourceauthor:[jschwarzwalder (AWS)]
