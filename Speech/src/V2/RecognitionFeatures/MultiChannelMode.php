<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v2/cloud_speech.proto

namespace Google\Cloud\Speech\V2\RecognitionFeatures;

use UnexpectedValueException;

/**
 * Options for how to recognize multi-channel audio.
 *
 * Protobuf type <code>google.cloud.speech.v2.RecognitionFeatures.MultiChannelMode</code>
 */
class MultiChannelMode
{
    /**
     * Default value for the multi-channel mode. If the audio contains
     * multiple channels, only the first channel will be transcribed; other
     * channels will be ignored.
     *
     * Generated from protobuf enum <code>MULTI_CHANNEL_MODE_UNSPECIFIED = 0;</code>
     */
    const MULTI_CHANNEL_MODE_UNSPECIFIED = 0;
    /**
     * If selected, each channel in the provided audio is transcribed
     * independently. This cannot be selected if the selected
     * [model][google.cloud.speech.v2.Recognizer.model] is `latest_short`.
     *
     * Generated from protobuf enum <code>SEPARATE_RECOGNITION_PER_CHANNEL = 1;</code>
     */
    const SEPARATE_RECOGNITION_PER_CHANNEL = 1;

    private static $valueToName = [
        self::MULTI_CHANNEL_MODE_UNSPECIFIED => 'MULTI_CHANNEL_MODE_UNSPECIFIED',
        self::SEPARATE_RECOGNITION_PER_CHANNEL => 'SEPARATE_RECOGNITION_PER_CHANNEL',
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


