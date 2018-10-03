<?php
/**
 * Created by PhpStorm.
 * User: riyaPatel
 * Date: 10/2/18
 * Time: 6:27 PM
 */
use Twilio\Rest\Client;
require_once 'Twilio/autoload.php';

$sid= "ACbce60b0e8c6006bb22a77ad6c5bc1809";
$token= "5b5c5afad6e13cf63ccd4bfb2fc72d3a";
$twilio= new Client($sid, $token);

$message = $twilio->messages
    ->create("+15512638397", // To
        array(
            "from" => "+16672223310",
            "body" => "Hello from RIYA PATEL CS 643 Fall 2018"
        )
    );
print($message->sid);