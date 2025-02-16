<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/adaptive_mt.proto

namespace Google\Cloud\Translate\V3\AdaptiveMtTranslateRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message of caller-provided reference configuration.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.AdaptiveMtTranslateRequest.ReferenceSentenceConfig</code>
 */
class ReferenceSentenceConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Reference sentences pair lists. Each list will be used as the references
     * to translate the sentence under "content" field at the corresponding
     * index. Length of the list is required to be equal to the length of
     * "content" field.
     *
     * Generated from protobuf field <code>repeated .google.cloud.translation.v3.AdaptiveMtTranslateRequest.ReferenceSentencePairList reference_sentence_pair_lists = 1;</code>
     */
    private $reference_sentence_pair_lists;
    /**
     * Source language code.
     *
     * Generated from protobuf field <code>string source_language_code = 2;</code>
     */
    protected $source_language_code = '';
    /**
     * Target language code.
     *
     * Generated from protobuf field <code>string target_language_code = 3;</code>
     */
    protected $target_language_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Translate\V3\AdaptiveMtTranslateRequest\ReferenceSentencePairList>|\Google\Protobuf\Internal\RepeatedField $reference_sentence_pair_lists
     *           Reference sentences pair lists. Each list will be used as the references
     *           to translate the sentence under "content" field at the corresponding
     *           index. Length of the list is required to be equal to the length of
     *           "content" field.
     *     @type string $source_language_code
     *           Source language code.
     *     @type string $target_language_code
     *           Target language code.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3\AdaptiveMt::initOnce();
        parent::__construct($data);
    }

    /**
     * Reference sentences pair lists. Each list will be used as the references
     * to translate the sentence under "content" field at the corresponding
     * index. Length of the list is required to be equal to the length of
     * "content" field.
     *
     * Generated from protobuf field <code>repeated .google.cloud.translation.v3.AdaptiveMtTranslateRequest.ReferenceSentencePairList reference_sentence_pair_lists = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReferenceSentencePairLists()
    {
        return $this->reference_sentence_pair_lists;
    }

    /**
     * Reference sentences pair lists. Each list will be used as the references
     * to translate the sentence under "content" field at the corresponding
     * index. Length of the list is required to be equal to the length of
     * "content" field.
     *
     * Generated from protobuf field <code>repeated .google.cloud.translation.v3.AdaptiveMtTranslateRequest.ReferenceSentencePairList reference_sentence_pair_lists = 1;</code>
     * @param array<\Google\Cloud\Translate\V3\AdaptiveMtTranslateRequest\ReferenceSentencePairList>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReferenceSentencePairLists($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Translate\V3\AdaptiveMtTranslateRequest\ReferenceSentencePairList::class);
        $this->reference_sentence_pair_lists = $arr;

        return $this;
    }

    /**
     * Source language code.
     *
     * Generated from protobuf field <code>string source_language_code = 2;</code>
     * @return string
     */
    public function getSourceLanguageCode()
    {
        return $this->source_language_code;
    }

    /**
     * Source language code.
     *
     * Generated from protobuf field <code>string source_language_code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_language_code = $var;

        return $this;
    }

    /**
     * Target language code.
     *
     * Generated from protobuf field <code>string target_language_code = 3;</code>
     * @return string
     */
    public function getTargetLanguageCode()
    {
        return $this->target_language_code;
    }

    /**
     * Target language code.
     *
     * Generated from protobuf field <code>string target_language_code = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_language_code = $var;

        return $this;
    }

}


