<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gsuiteaddons/v1/gsuiteaddons.proto

namespace Google\Cloud\GSuiteAddOns\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Google Workspace add-on deployment
 *
 * Generated from protobuf message <code>google.cloud.gsuiteaddons.v1.Deployment</code>
 */
class Deployment extends \Google\Protobuf\Internal\Message
{
    /**
     * The deployment resource name.
     * Example:  projects/123/deployments/my_deployment.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The list of Google OAuth scopes for which to request consent from the end
     * user before executing an add-on endpoint.
     *
     * Generated from protobuf field <code>repeated string oauth_scopes = 2;</code>
     */
    private $oauth_scopes;
    /**
     * The Google Workspace add-on configuration.
     *
     * Generated from protobuf field <code>.google.cloud.gsuiteaddons.v1.AddOns add_ons = 3;</code>
     */
    protected $add_ons = null;
    /**
     * This value is computed by the server based on the version of the
     * deployment in storage, and may be sent on update and delete requests to
     * ensure the client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 5;</code>
     */
    protected $etag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The deployment resource name.
     *           Example:  projects/123/deployments/my_deployment.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $oauth_scopes
     *           The list of Google OAuth scopes for which to request consent from the end
     *           user before executing an add-on endpoint.
     *     @type \Google\Cloud\GSuiteAddOns\V1\AddOns $add_ons
     *           The Google Workspace add-on configuration.
     *     @type string $etag
     *           This value is computed by the server based on the version of the
     *           deployment in storage, and may be sent on update and delete requests to
     *           ensure the client has an up-to-date value before proceeding.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gsuiteaddons\V1\Gsuiteaddons::initOnce();
        parent::__construct($data);
    }

    /**
     * The deployment resource name.
     * Example:  projects/123/deployments/my_deployment.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The deployment resource name.
     * Example:  projects/123/deployments/my_deployment.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * The list of Google OAuth scopes for which to request consent from the end
     * user before executing an add-on endpoint.
     *
     * Generated from protobuf field <code>repeated string oauth_scopes = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOauthScopes()
    {
        return $this->oauth_scopes;
    }

    /**
     * The list of Google OAuth scopes for which to request consent from the end
     * user before executing an add-on endpoint.
     *
     * Generated from protobuf field <code>repeated string oauth_scopes = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOauthScopes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->oauth_scopes = $arr;

        return $this;
    }

    /**
     * The Google Workspace add-on configuration.
     *
     * Generated from protobuf field <code>.google.cloud.gsuiteaddons.v1.AddOns add_ons = 3;</code>
     * @return \Google\Cloud\GSuiteAddOns\V1\AddOns|null
     */
    public function getAddOns()
    {
        return $this->add_ons;
    }

    public function hasAddOns()
    {
        return isset($this->add_ons);
    }

    public function clearAddOns()
    {
        unset($this->add_ons);
    }

    /**
     * The Google Workspace add-on configuration.
     *
     * Generated from protobuf field <code>.google.cloud.gsuiteaddons.v1.AddOns add_ons = 3;</code>
     * @param \Google\Cloud\GSuiteAddOns\V1\AddOns $var
     * @return $this
     */
    public function setAddOns($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GSuiteAddOns\V1\AddOns::class);
        $this->add_ons = $var;

        return $this;
    }

    /**
     * This value is computed by the server based on the version of the
     * deployment in storage, and may be sent on update and delete requests to
     * ensure the client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 5;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * This value is computed by the server based on the version of the
     * deployment in storage, and may be sent on update and delete requests to
     * ensure the client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 5;</code>
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

