<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/memorystore/v1/memorystore.proto

namespace Google\Cloud\Memorystore\V1\Instance;

use UnexpectedValueException;

/**
 * The mode config, which is used to enable/disable cluster mode.
 *
 * Protobuf type <code>google.cloud.memorystore.v1.Instance.Mode</code>
 */
class Mode
{
    /**
     * Mode is not specified.
     *
     * Generated from protobuf enum <code>MODE_UNSPECIFIED = 0;</code>
     */
    const MODE_UNSPECIFIED = 0;
    /**
     * Deprecated: Use CLUSTER_DISABLED instead.
     *
     * Generated from protobuf enum <code>STANDALONE = 1 [deprecated = true];</code>
     */
    const STANDALONE = 1;
    /**
     * Instance is in cluster mode.
     *
     * Generated from protobuf enum <code>CLUSTER = 2;</code>
     */
    const CLUSTER = 2;
    /**
     * Cluster mode is disabled for the instance.
     *
     * Generated from protobuf enum <code>CLUSTER_DISABLED = 4;</code>
     */
    const CLUSTER_DISABLED = 4;

    private static $valueToName = [
        self::MODE_UNSPECIFIED => 'MODE_UNSPECIFIED',
        self::STANDALONE => 'STANDALONE',
        self::CLUSTER => 'CLUSTER',
        self::CLUSTER_DISABLED => 'CLUSTER_DISABLED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


