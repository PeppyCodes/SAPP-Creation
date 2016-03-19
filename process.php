<?php
require 'vendor/autoload.php';

use SparkPost\SparkPost;
use GuzzleHttp\Client;
use Ivory\HttpAdapter\Guzzle6HttpAdapter;

$httpAdapter = new Guzzle6HttpAdapter(new Client());
$sparky = new SparkPost($httpAdapter, ['key'=>getEnv('9ba9a7df02202d283455f92f2710d2b81b40cb9b')]);

$results = $sparky->transmission->send([
    'from'=>'sharanc25@gmail.com',
    'html'=>'<html><body><p>Testing SparkPost - the world\'s most awesomest email service!</p></body></html>',
    'subject'=> 'Oh hey!',
    'recipients'=>[
        ['address'=>['email'=>'sharanc25@gmail.com']]
    ]
]);