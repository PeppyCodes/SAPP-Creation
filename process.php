<?php
require 'vendor/autoload.php';

use SparkPost\SparkPost;
use GuzzleHttp\Client;
use Ivory\HttpAdapter\Guzzle6HttpAdapter;

$httpAdapter = new Guzzle6HttpAdapter(new Client());
$sparky = new SparkPost($httpAdapter, ['key'=>'faa9dd73426b59b7b84d7331fcaa870bf0dc6907']);

try {
  $results = $sparky->transmission->send([
    'from'=>'admin@sappcreation.com',
    'html'=>'<p>Hello World!</p>',
    'text'=>'Hello World!',
    'subject'=>'Example Email',
    'recipients'=>[
      [
        'address'=>[
          'email'=>'sharanc25@gmail.com'
        ]
      ]
    ]
  ]);

echo 'Woohoo! You just sent your first mailing!';
} catch (\Exception $err) {
echo 'Whoops! Something went wrong';
var_dump($err);
}