<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC5df47aa86fad9820d5ae0e5465b1d11e';
$auth_token = '0f68604614513b2cb43c805c5a341fe8';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+19165071024";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    '+919542898742',
    array(
        'from' => $twilio_number,
        'body' => 'Hello!'
    )
);
