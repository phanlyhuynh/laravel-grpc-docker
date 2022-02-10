<?php

use HuynhTest\Example\ExampleClient;

require "vendor/autoload.php";

use HuynhTest\Example\DelRequest;
use HuynhTest\Example\GetRequest;
use HuynhTest\Example\SetRequest;
use Spiral\GRPC;


$client = new ExampleClient('localhost:9090',[
    'credentials' => \Grpc\ChannelCredentials::createInsecure(),
]);


[$response, $status] = $client->Set(new SetRequest(['Key' => 'hello', 'Value' => 'world']))->wait();
echo "================== SET ==================\n";
echo $response->getOK() === true, "\n";

[$response, $status] = $client->Get(new GetRequest(['Key' => 'hello']))->wait();
echo "================== GET ==================\n";
echo $response->getKey(), " : ", $response->getValue(), "\n";

[$response, $status] = $client->Del(new DelRequest(['Key' => 'hello']))->wait();
echo "================== DEL ==================\n";
echo $response->getOK() === true, "\n";

[$response, $status] = $client->Get(new GetRequest(['Key' => 'hello']))->wait();
echo "================== GET ==================\n";
echo $status->code === GRPC\StatusCode::NOT_FOUND, "\n";
