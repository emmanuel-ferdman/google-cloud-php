<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2/task.proto

namespace Google\Cloud\Tasks\V2\Task;

use UnexpectedValueException;

/**
 * The view specifies a subset of [Task][google.cloud.tasks.v2.Task] data.
 * When a task is returned in a response, not all
 * information is retrieved by default because some data, such as
 * payloads, might be desirable to return only when needed because
 * of its large size or because of the sensitivity of data that it
 * contains.
 *
 * Protobuf type <code>google.cloud.tasks.v2.Task.View</code>
 */
class View
{
    /**
     * Unspecified. Defaults to BASIC.
     *
     * Generated from protobuf enum <code>VIEW_UNSPECIFIED = 0;</code>
     */
    const VIEW_UNSPECIFIED = 0;
    /**
     * The basic view omits fields which can be large or can contain
     * sensitive data.
     * This view does not include the
     * [body in
     * AppEngineHttpRequest][google.cloud.tasks.v2.AppEngineHttpRequest.body].
     * Bodies are desirable to return only when needed, because they
     * can be large and because of the sensitivity of the data that you
     * choose to store in it.
     *
     * Generated from protobuf enum <code>BASIC = 1;</code>
     */
    const BASIC = 1;
    /**
     * All information is returned.
     * Authorization for [FULL][google.cloud.tasks.v2.Task.View.FULL] requires
     * `cloudtasks.tasks.fullView` [Google IAM](https://cloud.google.com/iam/)
     * permission on the [Queue][google.cloud.tasks.v2.Queue] resource.
     *
     * Generated from protobuf enum <code>FULL = 2;</code>
     */
    const FULL = 2;

    private static $valueToName = [
        self::VIEW_UNSPECIFIED => 'VIEW_UNSPECIFIED',
        self::BASIC => 'BASIC',
        self::FULL => 'FULL',
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


