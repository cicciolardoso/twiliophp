<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require __DIR__.'/vendor/autoload.php';

use Twilio\Rest\Client;

// Find your Account Sid at twilio.com/console
// Provision API Keys at twilio.com/console/runtime/api-keys
$sid    = "ACc24c78774ee49899a451437fa4522e32";
$apiKey  = "SKd24128eab5752a85de8ddb3530311514";
$apiSecret  = "KytK19ZQ0RnHm90gdLDtDHTm6tbbzv7m";
$twilio = new Client($apiKey, $apiSecret, $sid);

$message = $twilio->messages
                  ->create("+33630564464", // to
                           array(
                               "body" => "Never gonna give you up.",
                               //"from" => "+15017122661"
                           )
                  );

print($message->sid);



?>
