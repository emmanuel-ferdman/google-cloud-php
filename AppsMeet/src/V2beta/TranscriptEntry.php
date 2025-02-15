<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/meet/v2beta/resource.proto

namespace Google\Apps\Meet\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Single entry for one user’s speech during a transcript session.
 *
 * Generated from protobuf message <code>google.apps.meet.v2beta.TranscriptEntry</code>
 */
class TranscriptEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of the entry. Format:
     * "conferenceRecords/{conference_record}/transcripts/{transcript}/entries/{entry}"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. Refers to the participant who speaks.
     *
     * Generated from protobuf field <code>string participant = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $participant = '';
    /**
     * Output only. The transcribed text of the participant's voice, at maximum
     * 10K words. Note that the limit is subject to change.
     *
     * Generated from protobuf field <code>string text = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $text = '';
    /**
     * Output only. Language of spoken text, such as "en-US".
     * IETF BCP 47 syntax (https://tools.ietf.org/html/bcp47)
     *
     * Generated from protobuf field <code>string language_code = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $language_code = '';
    /**
     * Output only. Timestamp when the transcript entry started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $start_time = null;
    /**
     * Output only. Timestamp when the transcript entry ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $end_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of the entry. Format:
     *           "conferenceRecords/{conference_record}/transcripts/{transcript}/entries/{entry}"
     *     @type string $participant
     *           Output only. Refers to the participant who speaks.
     *     @type string $text
     *           Output only. The transcribed text of the participant's voice, at maximum
     *           10K words. Note that the limit is subject to change.
     *     @type string $language_code
     *           Output only. Language of spoken text, such as "en-US".
     *           IETF BCP 47 syntax (https://tools.ietf.org/html/bcp47)
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Output only. Timestamp when the transcript entry started.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Output only. Timestamp when the transcript entry ended.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Meet\V2Beta\Resource::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of the entry. Format:
     * "conferenceRecords/{conference_record}/transcripts/{transcript}/entries/{entry}"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of the entry. Format:
     * "conferenceRecords/{conference_record}/transcripts/{transcript}/entries/{entry}"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Refers to the participant who speaks.
     *
     * Generated from protobuf field <code>string participant = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Output only. Refers to the participant who speaks.
     *
     * Generated from protobuf field <code>string participant = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParticipant($var)
    {
        GPBUtil::checkString($var, True);
        $this->participant = $var;

        return $this;
    }

    /**
     * Output only. The transcribed text of the participant's voice, at maximum
     * 10K words. Note that the limit is subject to change.
     *
     * Generated from protobuf field <code>string text = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Output only. The transcribed text of the participant's voice, at maximum
     * 10K words. Note that the limit is subject to change.
     *
     * Generated from protobuf field <code>string text = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

    /**
     * Output only. Language of spoken text, such as "en-US".
     * IETF BCP 47 syntax (https://tools.ietf.org/html/bcp47)
     *
     * Generated from protobuf field <code>string language_code = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Output only. Language of spoken text, such as "en-US".
     * IETF BCP 47 syntax (https://tools.ietf.org/html/bcp47)
     *
     * Generated from protobuf field <code>string language_code = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when the transcript entry started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Output only. Timestamp when the transcript entry started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when the transcript entry ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Output only. Timestamp when the transcript entry ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

}

