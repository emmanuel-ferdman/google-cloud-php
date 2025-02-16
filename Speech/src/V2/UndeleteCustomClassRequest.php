<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v2/cloud_speech.proto

namespace Google\Cloud\Speech\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the
 * [UndeleteCustomClass][google.cloud.speech.v2.Speech.UndeleteCustomClass]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.speech.v2.UndeleteCustomClassRequest</code>
 */
class UndeleteCustomClassRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the CustomClass to undelete.
     * Format:
     * `projects/{project}/locations/{location}/customClasses/{custom_class}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * If set, validate the request and preview the undeleted CustomClass, but do
     * not actually undelete it.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     */
    protected $validate_only = false;
    /**
     * This checksum is computed by the server based on the value of other
     * fields. This may be sent on update, undelete, and delete requests to ensure
     * the client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 4;</code>
     */
    protected $etag = '';

    /**
     * @param string $name Required. The name of the CustomClass to undelete.
     *                     Format:
     *                     `projects/{project}/locations/{location}/customClasses/{custom_class}`
     *                     Please see {@see SpeechClient::customClassName()} for help formatting this field.
     *
     * @return \Google\Cloud\Speech\V2\UndeleteCustomClassRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the CustomClass to undelete.
     *           Format:
     *           `projects/{project}/locations/{location}/customClasses/{custom_class}`
     *     @type bool $validate_only
     *           If set, validate the request and preview the undeleted CustomClass, but do
     *           not actually undelete it.
     *     @type string $etag
     *           This checksum is computed by the server based on the value of other
     *           fields. This may be sent on update, undelete, and delete requests to ensure
     *           the client has an up-to-date value before proceeding.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V2\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the CustomClass to undelete.
     * Format:
     * `projects/{project}/locations/{location}/customClasses/{custom_class}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the CustomClass to undelete.
     * Format:
     * `projects/{project}/locations/{location}/customClasses/{custom_class}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * If set, validate the request and preview the undeleted CustomClass, but do
     * not actually undelete it.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * If set, validate the request and preview the undeleted CustomClass, but do
     * not actually undelete it.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

    /**
     * This checksum is computed by the server based on the value of other
     * fields. This may be sent on update, undelete, and delete requests to ensure
     * the client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 4;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * This checksum is computed by the server based on the value of other
     * fields. This may be sent on update, undelete, and delete requests to ensure
     * the client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

}

