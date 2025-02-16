<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/test_case.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents configurations for a test case.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.TestConfig</code>
 */
class TestConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Session parameters to be compared when calculating differences.
     *
     * Generated from protobuf field <code>repeated string tracking_parameters = 1;</code>
     */
    private $tracking_parameters;
    /**
     * Flow name to start the test case with.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>`.
     *  Only one of `flow` and `page` should be set to indicate the starting point
     *  of the test case. If neither is set, the test case will start with start
     *  page on the default start flow.
     *
     * Generated from protobuf field <code>string flow = 2 [(.google.api.resource_reference) = {</code>
     */
    protected $flow = '';
    /**
     * The [page][google.cloud.dialogflow.cx.v3.Page] to start the test case with.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/pages/<PageID>`.
     *  Only one of `flow` and `page` should be set to indicate the starting point
     *  of the test case. If neither is set, the test case will start with start
     *  page on the default start flow.
     *
     * Generated from protobuf field <code>string page = 3 [(.google.api.resource_reference) = {</code>
     */
    protected $page = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $tracking_parameters
     *           Session parameters to be compared when calculating differences.
     *     @type string $flow
     *           Flow name to start the test case with.
     *           Format:
     *           `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>`.
     *            Only one of `flow` and `page` should be set to indicate the starting point
     *            of the test case. If neither is set, the test case will start with start
     *            page on the default start flow.
     *     @type string $page
     *           The [page][google.cloud.dialogflow.cx.v3.Page] to start the test case with.
     *           Format:
     *           `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/pages/<PageID>`.
     *            Only one of `flow` and `page` should be set to indicate the starting point
     *            of the test case. If neither is set, the test case will start with start
     *            page on the default start flow.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\TestCase::initOnce();
        parent::__construct($data);
    }

    /**
     * Session parameters to be compared when calculating differences.
     *
     * Generated from protobuf field <code>repeated string tracking_parameters = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTrackingParameters()
    {
        return $this->tracking_parameters;
    }

    /**
     * Session parameters to be compared when calculating differences.
     *
     * Generated from protobuf field <code>repeated string tracking_parameters = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTrackingParameters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tracking_parameters = $arr;

        return $this;
    }

    /**
     * Flow name to start the test case with.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>`.
     *  Only one of `flow` and `page` should be set to indicate the starting point
     *  of the test case. If neither is set, the test case will start with start
     *  page on the default start flow.
     *
     * Generated from protobuf field <code>string flow = 2 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getFlow()
    {
        return $this->flow;
    }

    /**
     * Flow name to start the test case with.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>`.
     *  Only one of `flow` and `page` should be set to indicate the starting point
     *  of the test case. If neither is set, the test case will start with start
     *  page on the default start flow.
     *
     * Generated from protobuf field <code>string flow = 2 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setFlow($var)
    {
        GPBUtil::checkString($var, True);
        $this->flow = $var;

        return $this;
    }

    /**
     * The [page][google.cloud.dialogflow.cx.v3.Page] to start the test case with.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/pages/<PageID>`.
     *  Only one of `flow` and `page` should be set to indicate the starting point
     *  of the test case. If neither is set, the test case will start with start
     *  page on the default start flow.
     *
     * Generated from protobuf field <code>string page = 3 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * The [page][google.cloud.dialogflow.cx.v3.Page] to start the test case with.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/pages/<PageID>`.
     *  Only one of `flow` and `page` should be set to indicate the starting point
     *  of the test case. If neither is set, the test case will start with start
     *  page on the default start flow.
     *
     * Generated from protobuf field <code>string page = 3 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPage($var)
    {
        GPBUtil::checkString($var, True);
        $this->page = $var;

        return $this;
    }

}

