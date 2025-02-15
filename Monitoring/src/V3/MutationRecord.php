<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/mutation_record.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes a change made to a configuration.
 *
 * Generated from protobuf message <code>google.monitoring.v3.MutationRecord</code>
 */
class MutationRecord extends \Google\Protobuf\Internal\Message
{
    /**
     * When the change occurred.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp mutate_time = 1;</code>
     */
    protected $mutate_time = null;
    /**
     * The email address of the user making the change.
     *
     * Generated from protobuf field <code>string mutated_by = 2;</code>
     */
    protected $mutated_by = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $mutate_time
     *           When the change occurred.
     *     @type string $mutated_by
     *           The email address of the user making the change.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\MutationRecord::initOnce();
        parent::__construct($data);
    }

    /**
     * When the change occurred.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp mutate_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getMutateTime()
    {
        return $this->mutate_time;
    }

    public function hasMutateTime()
    {
        return isset($this->mutate_time);
    }

    public function clearMutateTime()
    {
        unset($this->mutate_time);
    }

    /**
     * When the change occurred.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp mutate_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setMutateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->mutate_time = $var;

        return $this;
    }

    /**
     * The email address of the user making the change.
     *
     * Generated from protobuf field <code>string mutated_by = 2;</code>
     * @return string
     */
    public function getMutatedBy()
    {
        return $this->mutated_by;
    }

    /**
     * The email address of the user making the change.
     *
     * Generated from protobuf field <code>string mutated_by = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMutatedBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->mutated_by = $var;

        return $this;
    }

}

