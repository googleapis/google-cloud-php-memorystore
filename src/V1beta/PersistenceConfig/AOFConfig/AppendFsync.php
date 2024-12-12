<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/memorystore/v1beta/memorystore.proto

namespace Google\Cloud\Memorystore\V1beta\PersistenceConfig\AOFConfig;

use UnexpectedValueException;

/**
 * Possible fsync modes.
 *
 * Protobuf type <code>google.cloud.memorystore.v1beta.PersistenceConfig.AOFConfig.AppendFsync</code>
 */
class AppendFsync
{
    /**
     * Not set. Default: EVERY_SEC
     *
     * Generated from protobuf enum <code>APPEND_FSYNC_UNSPECIFIED = 0;</code>
     */
    const APPEND_FSYNC_UNSPECIFIED = 0;
    /**
     * Never fsync. Normally Linux will flush data every 30 seconds with this
     * configuration, but it's up to the kernel's exact tuning.
     *
     * Generated from protobuf enum <code>NEVER = 1;</code>
     */
    const NEVER = 1;
    /**
     * Fsync every second. You may lose 1 second of data if there is a
     * disaster.
     *
     * Generated from protobuf enum <code>EVERY_SEC = 2;</code>
     */
    const EVERY_SEC = 2;
    /**
     * Fsync every time new write commands are appended to the AOF. The best
     * data loss protection at the cost of performance.
     *
     * Generated from protobuf enum <code>ALWAYS = 3;</code>
     */
    const ALWAYS = 3;

    private static $valueToName = [
        self::APPEND_FSYNC_UNSPECIFIED => 'APPEND_FSYNC_UNSPECIFIED',
        self::NEVER => 'NEVER',
        self::EVERY_SEC => 'EVERY_SEC',
        self::ALWAYS => 'ALWAYS',
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


