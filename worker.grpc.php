<?php

declare(strict_types=1);
//worker.grpc.php

use App\Grpc\ExampleController;
use HuynhTest\Example\ExampleInterface;
use Spiral\Goridge\StreamRelay;
use Spiral\RoadRunner\Worker;
use Spiral\GRPC;

ini_set('display_errors', 'stderr'); // error_log will be reflected properly in roadrunner logs
require "vendor/autoload.php";

//To run server in debug mode - new \Spiral\GRPC\Server(null, ['debug' => true]);
$server = new GRPC\Server(null, ['debug' => true]);

// Register our cache service
$server->registerService(ExampleInterface::class, new ExampleController());

// RoadRunner to PHP communication will happen over stdin and stdout pipes
$relay = new StreamRelay(STDIN, STDOUT);
$w = new Worker($relay);
$server->serve($w);
