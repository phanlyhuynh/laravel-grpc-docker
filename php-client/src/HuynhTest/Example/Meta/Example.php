<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: example.proto

namespace HuynhTest\Example\Meta;

class Example
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
?
example.protoexample"(

SetRequest
Key (	
Value (	"
SetResponse

OK ("

DelRequest
Key (	"
DelResponse

OK ("

GetRequest
Key (	")
GetResponse
Key (	
Value (	2?
Example0
Set.example.SetRequest.example.SetResponse0
Del.example.DelRequest.example.DelResponse0
Get.example.GetRequest.example.GetResponseB-?HuynhTest\\Example?HuynhTest\\Example\\Metabproto3'
        , true);

        static::$is_initialized = true;
    }
}

