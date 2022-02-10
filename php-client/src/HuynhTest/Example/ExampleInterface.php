<?php
# Generated by the protocol buffer compiler (spiral/php-grpc). DO NOT EDIT!
# source: example.proto

namespace HuynhTest\Example;

use Spiral\GRPC;

interface ExampleInterface extends GRPC\ServiceInterface
{
    // GRPC specific service name.
    public const NAME = "example.Example";

    /**
    * @param GRPC\ContextInterface $ctx
    * @param SetRequest $in
    * @return SetResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function Set(GRPC\ContextInterface $ctx, SetRequest $in): SetResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param DelRequest $in
    * @return DelResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function Del(GRPC\ContextInterface $ctx, DelRequest $in): DelResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param GetRequest $in
    * @return GetResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function Get(GRPC\ContextInterface $ctx, GetRequest $in): GetResponse;
}
