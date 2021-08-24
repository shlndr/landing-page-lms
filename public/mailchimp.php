<?php
require_once('http://iciciukcelebrates.com/vendor/autoload.php');

// function run(){
//  try {
//     $mailchimp = new MailchimpTransactional\ApiClient();
//     $mailchimp->setApiKey('91c6c9f591f2b2055308957b6dbf5346-us2');
//     $response = $mailchimp->users->ping();
//     print_r($response);
//   } catch (Error $e) {
//         echo 'Error: ',  $e->getMessage(), "\n";
//   }
// }
// run();
$mailchimp = new MailchimpTransactional\ApiClient();
$mailchimp->setApiKey('yYXTVeh0hOCp8L2AJmWhvA');

$response = $mailchimp->users->ping();
print_r($response);

// require_once('vendor/autoload.php');

// function run($message)
// {
//     try {
//         $mailchimp = new MailchimpTransactional\ApiClient();
//         $mailchimp->setApiKey('yYXTVeh0hOCp8L2AJmWhvA');

//         $response = $mailchimp->messages->send(["message" => $message]);
//         print_r($response);
//     } catch (Error $e) {
//         echo 'Error: ', $e->getMessage(), "\n";
//     }
// }

// $message = [
//     "from_email" => "leena.g@logicserve.com",
//     "subject" => "Hello world",
//     "text" => "Welcome to Mailchimp Transactional!",
//     "to" => [
//         [
//             "email" => "leena.g@logicserve.com",
//             "type" => "to"
//         ]
//     ]
// ];
// run($message);