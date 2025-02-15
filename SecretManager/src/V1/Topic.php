<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/secretmanager/v1/resources.proto

namespace Google\Cloud\SecretManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Pub/Sub topic which Secret Manager will publish to when control plane
 * events occur on this secret.
 *
 * Generated from protobuf message <code>google.cloud.secretmanager.v1.Topic</code>
 */
class Topic extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. The resource name of the Pub/Sub topic that will be published
     * to, in the following format: `projects/&#42;&#47;topics/&#42;`. For publication to
     * succeed, the Secret Manager service agent must have the
     * `pubsub.topic.publish` permission on the topic. The Pub/Sub Publisher role
     * (`roles/pubsub.publisher`) includes this permission.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. The resource name of the Pub/Sub topic that will be published
     *           to, in the following format: `projects/&#42;&#47;topics/&#42;`. For publication to
     *           succeed, the Secret Manager service agent must have the
     *           `pubsub.topic.publish` permission on the topic. The Pub/Sub Publisher role
     *           (`roles/pubsub.publisher`) includes this permission.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Secretmanager\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. The resource name of the Pub/Sub topic that will be published
     * to, in the following format: `projects/&#42;&#47;topics/&#42;`. For publication to
     * succeed, the Secret Manager service agent must have the
     * `pubsub.topic.publish` permission on the topic. The Pub/Sub Publisher role
     * (`roles/pubsub.publisher`) includes this permission.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. The resource name of the Pub/Sub topic that will be published
     * to, in the following format: `projects/&#42;&#47;topics/&#42;`. For publication to
     * succeed, the Secret Manager service agent must have the
     * `pubsub.topic.publish` permission on the topic. The Pub/Sub Publisher role
     * (`roles/pubsub.publisher`) includes this permission.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

