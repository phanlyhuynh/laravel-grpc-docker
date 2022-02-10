<?php

namespace App\Grpc;
use HuynhTest\Example\DelRequest;
use HuynhTest\Example\DelResponse;
use HuynhTest\Example\ExampleInterface;
use HuynhTest\Example\GetRequest;
use HuynhTest\Example\GetResponse;
use HuynhTest\Example\SetRequest;
use HuynhTest\Example\SetResponse;
use Spiral\GRPC\ContextInterface;

class ExampleController implements ExampleInterface
{

    public function Set(ContextInterface $ctx, SetRequest $in): SetResponse
    {
        return new SetResponse(['OK' => true]);
    }

    public function Del(ContextInterface $ctx, DelRequest $in): DelResponse
    {
        return new DelResponse(['OK' => true]);
    }

    public function Get(ContextInterface $ctx, GetRequest $in): GetResponse
    {
        return new GetResponse([
            'Key' => $in->getKey(),
            'Value' => 12121,
        ]);
    }
}
