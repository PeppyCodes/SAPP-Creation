<?php
require 'vendor/autoload.php';

use SparkPost\SparkPost;
use GuzzleHttp\Client;
use Ivory\HttpAdapter\Guzzle6HttpAdapter;

$httpAdapter = new Guzzle6HttpAdapter(new Client());
$sparky = new SparkPost($httpAdapter, ['key'=>'faa9dd73426b59b7b84d7331fcaa870bf0dc6907']);

try {
// Build your email and send it!
$results = $sparky->transmission->send([
'from'=>'sharanc25@gmail.com',
'html'=>'<html><body><h1>Congratulations,!</h1><p>You just sent your very first mailing!</p></body></html>',
'text'=>'Congratulations,!! You just sent your very first mailing!',
'substitutionData'=>['name'=>'YOUR FIRST NAME'],
'subject'=>'First Mailing From PHP',
'recipients'=>[
[
'address'=>[
'name'=>'Sharan',
'email'=>'Sharanc25@gmail.com'
]
]
]
]);
echo 'Woohoo! You just sent your first mailing!';
} catch (\Exception $err) {
echo 'Whoops! Something went wrong';
var_dump($err);
}