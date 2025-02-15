<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_profile.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for
 * [ConversationProfiles.ListConversationProfiles][google.cloud.dialogflow.v2.ConversationProfiles.ListConversationProfiles].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.ListConversationProfilesResponse</code>
 */
class ListConversationProfilesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of project conversation profiles. There is a maximum number
     * of items returned based on the page_size field in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.ConversationProfile conversation_profiles = 1;</code>
     */
    private $conversation_profiles;
    /**
     * Token to retrieve the next page of results, or empty if there are no
     * more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dialogflow\V2\ConversationProfile>|\Google\Protobuf\Internal\RepeatedField $conversation_profiles
     *           The list of project conversation profiles. There is a maximum number
     *           of items returned based on the page_size field in the request.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no
     *           more results in the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\ConversationProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of project conversation profiles. There is a maximum number
     * of items returned based on the page_size field in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.ConversationProfile conversation_profiles = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConversationProfiles()
    {
        return $this->conversation_profiles;
    }

    /**
     * The list of project conversation profiles. There is a maximum number
     * of items returned based on the page_size field in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.ConversationProfile conversation_profiles = 1;</code>
     * @param array<\Google\Cloud\Dialogflow\V2\ConversationProfile>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConversationProfiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\ConversationProfile::class);
        $this->conversation_profiles = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no
     * more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no
     * more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

