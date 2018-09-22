<?php
namespace ComposerDemo;

require_once "vendor/autoload.php";

use Rivsen\Demo\Hello;
use GuzzleHttp\Client;

// Use rivsen/hello-world to print Hello.
$hello = new Hello('Dipak');
echo $hello->hello() . PHP_EOL;

// Use guzzlehttp/guzzle to call an API.
$client = new Client();
$response = $client->request(
  'GET',
  'https://jsonplaceholder.typicode.com/posts'
);
echo $response->getStatusCode() . PHP_EOL;
// 200
echo $response->getHeaderLine('content-type') . PHP_EOL;
// 'application/json; charset=utf8'
echo $response->getBody() . PHP_EOL;
