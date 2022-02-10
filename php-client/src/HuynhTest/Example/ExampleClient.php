<?php
// GENERATED CODE -- DO NOT EDIT!

namespace HuynhTest\Example;

/**
 */
class ExampleClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \HuynhTest\Example\SetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Set(\HuynhTest\Example\SetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/example.Example/Set',
        $argument,
        ['\HuynhTest\Example\SetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \HuynhTest\Example\DelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Del(\HuynhTest\Example\DelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/example.Example/Del',
        $argument,
        ['\HuynhTest\Example\DelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \HuynhTest\Example\GetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Get(\HuynhTest\Example\GetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/example.Example/Get',
        $argument,
        ['\HuynhTest\Example\GetResponse', 'decode'],
        $metadata, $options);
    }

}
