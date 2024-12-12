<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/memorystore/v1/memorystore.proto

namespace Google\Cloud\Memorystore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an endpoint for clients to connect to the instance.
 *
 * Generated from protobuf message <code>google.cloud.memorystore.v1.DiscoveryEndpoint</code>
 */
class DiscoveryEndpoint extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. IP address of the exposed endpoint clients connect to.
     *
     * Generated from protobuf field <code>string address = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $address = '';
    /**
     * Output only. The port number of the exposed endpoint.
     *
     * Generated from protobuf field <code>int32 port = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $port = 0;
    /**
     * Output only. The network where the IP address of the discovery endpoint
     * will be reserved, in the form of
     * projects/{network_project}/global/networks/{network_id}.
     *
     * Generated from protobuf field <code>string network = 4 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $network = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $address
     *           Output only. IP address of the exposed endpoint clients connect to.
     *     @type int $port
     *           Output only. The port number of the exposed endpoint.
     *     @type string $network
     *           Output only. The network where the IP address of the discovery endpoint
     *           will be reserved, in the form of
     *           projects/{network_project}/global/networks/{network_id}.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Memorystore\V1\Memorystore::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. IP address of the exposed endpoint clients connect to.
     *
     * Generated from protobuf field <code>string address = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Output only. IP address of the exposed endpoint clients connect to.
     *
     * Generated from protobuf field <code>string address = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     * Output only. The port number of the exposed endpoint.
     *
     * Generated from protobuf field <code>int32 port = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Output only. The port number of the exposed endpoint.
     *
     * Generated from protobuf field <code>int32 port = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->port = $var;

        return $this;
    }

    /**
     * Output only. The network where the IP address of the discovery endpoint
     * will be reserved, in the form of
     * projects/{network_project}/global/networks/{network_id}.
     *
     * Generated from protobuf field <code>string network = 4 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Output only. The network where the IP address of the discovery endpoint
     * will be reserved, in the form of
     * projects/{network_project}/global/networks/{network_id}.
     *
     * Generated from protobuf field <code>string network = 4 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

}
