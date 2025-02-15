<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/prediction_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [PredictionService.GenerateContent].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.GenerateContentResponse</code>
 */
class GenerateContentResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Generated candidates.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Candidate candidates = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $candidates;
    /**
     * Output only. The model version used to generate the response.
     *
     * Generated from protobuf field <code>string model_version = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $model_version = '';
    /**
     * Output only. Timestamp when the request is made to the server.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. response_id is used to identify each response. It is the
     * encoding of the event_id.
     *
     * Generated from protobuf field <code>string response_id = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $response_id = '';
    /**
     * Output only. Content filter results for a prompt sent in the request.
     * Note: Sent only in the first stream chunk.
     * Only happens when no candidates were generated due to content violations.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GenerateContentResponse.PromptFeedback prompt_feedback = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $prompt_feedback = null;
    /**
     * Usage metadata about the response(s).
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GenerateContentResponse.UsageMetadata usage_metadata = 4;</code>
     */
    protected $usage_metadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AIPlatform\V1\Candidate>|\Google\Protobuf\Internal\RepeatedField $candidates
     *           Output only. Generated candidates.
     *     @type string $model_version
     *           Output only. The model version used to generate the response.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Timestamp when the request is made to the server.
     *     @type string $response_id
     *           Output only. response_id is used to identify each response. It is the
     *           encoding of the event_id.
     *     @type \Google\Cloud\AIPlatform\V1\GenerateContentResponse\PromptFeedback $prompt_feedback
     *           Output only. Content filter results for a prompt sent in the request.
     *           Note: Sent only in the first stream chunk.
     *           Only happens when no candidates were generated due to content violations.
     *     @type \Google\Cloud\AIPlatform\V1\GenerateContentResponse\UsageMetadata $usage_metadata
     *           Usage metadata about the response(s).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PredictionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Generated candidates.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Candidate candidates = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCandidates()
    {
        return $this->candidates;
    }

    /**
     * Output only. Generated candidates.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Candidate candidates = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\Candidate>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCandidates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\Candidate::class);
        $this->candidates = $arr;

        return $this;
    }

    /**
     * Output only. The model version used to generate the response.
     *
     * Generated from protobuf field <code>string model_version = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getModelVersion()
    {
        return $this->model_version;
    }

    /**
     * Output only. The model version used to generate the response.
     *
     * Generated from protobuf field <code>string model_version = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setModelVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->model_version = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when the request is made to the server.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Timestamp when the request is made to the server.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. response_id is used to identify each response. It is the
     * encoding of the event_id.
     *
     * Generated from protobuf field <code>string response_id = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getResponseId()
    {
        return $this->response_id;
    }

    /**
     * Output only. response_id is used to identify each response. It is the
     * encoding of the event_id.
     *
     * Generated from protobuf field <code>string response_id = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setResponseId($var)
    {
        GPBUtil::checkString($var, True);
        $this->response_id = $var;

        return $this;
    }

    /**
     * Output only. Content filter results for a prompt sent in the request.
     * Note: Sent only in the first stream chunk.
     * Only happens when no candidates were generated due to content violations.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GenerateContentResponse.PromptFeedback prompt_feedback = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AIPlatform\V1\GenerateContentResponse\PromptFeedback|null
     */
    public function getPromptFeedback()
    {
        return $this->prompt_feedback;
    }

    public function hasPromptFeedback()
    {
        return isset($this->prompt_feedback);
    }

    public function clearPromptFeedback()
    {
        unset($this->prompt_feedback);
    }

    /**
     * Output only. Content filter results for a prompt sent in the request.
     * Note: Sent only in the first stream chunk.
     * Only happens when no candidates were generated due to content violations.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GenerateContentResponse.PromptFeedback prompt_feedback = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AIPlatform\V1\GenerateContentResponse\PromptFeedback $var
     * @return $this
     */
    public function setPromptFeedback($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\GenerateContentResponse\PromptFeedback::class);
        $this->prompt_feedback = $var;

        return $this;
    }

    /**
     * Usage metadata about the response(s).
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GenerateContentResponse.UsageMetadata usage_metadata = 4;</code>
     * @return \Google\Cloud\AIPlatform\V1\GenerateContentResponse\UsageMetadata|null
     */
    public function getUsageMetadata()
    {
        return $this->usage_metadata;
    }

    public function hasUsageMetadata()
    {
        return isset($this->usage_metadata);
    }

    public function clearUsageMetadata()
    {
        unset($this->usage_metadata);
    }

    /**
     * Usage metadata about the response(s).
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GenerateContentResponse.UsageMetadata usage_metadata = 4;</code>
     * @param \Google\Cloud\AIPlatform\V1\GenerateContentResponse\UsageMetadata $var
     * @return $this
     */
    public function setUsageMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\GenerateContentResponse\UsageMetadata::class);
        $this->usage_metadata = $var;

        return $this;
    }

}

