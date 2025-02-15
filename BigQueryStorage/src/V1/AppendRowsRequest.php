<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1/storage.proto

namespace Google\Cloud\BigQuery\Storage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `AppendRows`.
 * Because AppendRows is a bidirectional streaming RPC, certain parts of the
 * AppendRowsRequest need only be specified for the first request before
 * switching table destinations. You can also switch table destinations within
 * the same connection for the default stream.
 * The size of a single AppendRowsRequest must be less than 10 MB in size.
 * Requests larger than this return an error, typically `INVALID_ARGUMENT`.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.storage.v1.AppendRowsRequest</code>
 */
class AppendRowsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The write_stream identifies the append operation. It must be
     * provided in the following scenarios:
     * * In the first request to an AppendRows connection.
     * * In all subsequent requests to an AppendRows connection, if you use the
     * same connection to write to multiple tables or change the input schema for
     * default streams.
     * For explicitly created write streams, the format is:
     * * `projects/{project}/datasets/{dataset}/tables/{table}/streams/{id}`
     * For the special default stream, the format is:
     * * `projects/{project}/datasets/{dataset}/tables/{table}/streams/_default`.
     * An example of a possible sequence of requests with write_stream fields
     * within a single connection:
     * * r1: {write_stream: stream_name_1}
     * * r2: {write_stream: /&#42;omit*&#47;}
     * * r3: {write_stream: /&#42;omit*&#47;}
     * * r4: {write_stream: stream_name_2}
     * * r5: {write_stream: stream_name_2}
     * The destination changed in request_4, so the write_stream field must be
     * populated in all subsequent requests in this stream.
     *
     * Generated from protobuf field <code>string write_stream = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $write_stream = '';
    /**
     * If present, the write is only performed if the next append offset is same
     * as the provided value. If not present, the write is performed at the
     * current end of stream. Specifying a value for this field is not allowed
     * when calling AppendRows for the '_default' stream.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value offset = 2;</code>
     */
    protected $offset = null;
    /**
     * Id set by client to annotate its identity. Only initial request setting is
     * respected.
     *
     * Generated from protobuf field <code>string trace_id = 6;</code>
     */
    protected $trace_id = '';
    /**
     * A map to indicate how to interpret missing value for some fields. Missing
     * values are fields present in user schema but missing in rows. The key is
     * the field name. The value is the interpretation of missing values for the
     * field.
     * For example, a map {'foo': NULL_VALUE, 'bar': DEFAULT_VALUE} means all
     * missing values in field foo are interpreted as NULL, all missing values in
     * field bar are interpreted as the default value of field bar in table
     * schema.
     * If a field is not in this map and has missing values, the missing values
     * in this field are interpreted as NULL.
     * This field only applies to the current request, it won't affect other
     * requests on the connection.
     * Currently, field name can only be top-level column name, can't be a struct
     * field path like 'foo.bar'.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.bigquery.storage.v1.AppendRowsRequest.MissingValueInterpretation> missing_value_interpretations = 7;</code>
     */
    private $missing_value_interpretations;
    /**
     * Optional. Default missing value interpretation for all columns in the
     * table. When a value is specified on an `AppendRowsRequest`, it is applied
     * to all requests on the connection from that point forward, until a
     * subsequent `AppendRowsRequest` sets it to a different value.
     * `missing_value_interpretation` can override
     * `default_missing_value_interpretation`. For example, if you want to write
     * `NULL` instead of using default values for some columns, you can set
     * `default_missing_value_interpretation` to `DEFAULT_VALUE` and at the same
     * time, set `missing_value_interpretations` to `NULL_VALUE` on those columns.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.AppendRowsRequest.MissingValueInterpretation default_missing_value_interpretation = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $default_missing_value_interpretation = 0;
    protected $rows;

    /**
     * @param string $writeStream Required. The write_stream identifies the append operation. It must be
     *                            provided in the following scenarios:
     *
     *                            * In the first request to an AppendRows connection.
     *
     *                            * In all subsequent requests to an AppendRows connection, if you use the
     *                            same connection to write to multiple tables or change the input schema for
     *                            default streams.
     *
     *                            For explicitly created write streams, the format is:
     *
     *                            * `projects/{project}/datasets/{dataset}/tables/{table}/streams/{id}`
     *
     *                            For the special default stream, the format is:
     *
     *                            * `projects/{project}/datasets/{dataset}/tables/{table}/streams/_default`.
     *
     *                            An example of a possible sequence of requests with write_stream fields
     *                            within a single connection:
     *
     *                            * r1: {write_stream: stream_name_1}
     *
     *                            * r2: {write_stream: /*omit&#42;/}
     *
     *                            * r3: {write_stream: /*omit&#42;/}
     *
     *                            * r4: {write_stream: stream_name_2}
     *
     *                            * r5: {write_stream: stream_name_2}
     *
     *                            The destination changed in request_4, so the write_stream field must be
     *                            populated in all subsequent requests in this stream. Please see
     *                            {@see BigQueryWriteClient::writeStreamName()} for help formatting this field.
     *
     * @return \Google\Cloud\BigQuery\Storage\V1\AppendRowsRequest
     *
     * @experimental
     */
    public static function build(string $writeStream): self
    {
        return (new self())
            ->setWriteStream($writeStream);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $write_stream
     *           Required. The write_stream identifies the append operation. It must be
     *           provided in the following scenarios:
     *           * In the first request to an AppendRows connection.
     *           * In all subsequent requests to an AppendRows connection, if you use the
     *           same connection to write to multiple tables or change the input schema for
     *           default streams.
     *           For explicitly created write streams, the format is:
     *           * `projects/{project}/datasets/{dataset}/tables/{table}/streams/{id}`
     *           For the special default stream, the format is:
     *           * `projects/{project}/datasets/{dataset}/tables/{table}/streams/_default`.
     *           An example of a possible sequence of requests with write_stream fields
     *           within a single connection:
     *           * r1: {write_stream: stream_name_1}
     *           * r2: {write_stream: /&#42;omit*&#47;}
     *           * r3: {write_stream: /&#42;omit*&#47;}
     *           * r4: {write_stream: stream_name_2}
     *           * r5: {write_stream: stream_name_2}
     *           The destination changed in request_4, so the write_stream field must be
     *           populated in all subsequent requests in this stream.
     *     @type \Google\Protobuf\Int64Value $offset
     *           If present, the write is only performed if the next append offset is same
     *           as the provided value. If not present, the write is performed at the
     *           current end of stream. Specifying a value for this field is not allowed
     *           when calling AppendRows for the '_default' stream.
     *     @type \Google\Cloud\BigQuery\Storage\V1\AppendRowsRequest\ProtoData $proto_rows
     *           Rows in proto format.
     *     @type \Google\Cloud\BigQuery\Storage\V1\AppendRowsRequest\ArrowData $arrow_rows
     *           Rows in arrow format. This is an experimental feature only selected for
     *           allowlisted customers.
     *     @type string $trace_id
     *           Id set by client to annotate its identity. Only initial request setting is
     *           respected.
     *     @type array|\Google\Protobuf\Internal\MapField $missing_value_interpretations
     *           A map to indicate how to interpret missing value for some fields. Missing
     *           values are fields present in user schema but missing in rows. The key is
     *           the field name. The value is the interpretation of missing values for the
     *           field.
     *           For example, a map {'foo': NULL_VALUE, 'bar': DEFAULT_VALUE} means all
     *           missing values in field foo are interpreted as NULL, all missing values in
     *           field bar are interpreted as the default value of field bar in table
     *           schema.
     *           If a field is not in this map and has missing values, the missing values
     *           in this field are interpreted as NULL.
     *           This field only applies to the current request, it won't affect other
     *           requests on the connection.
     *           Currently, field name can only be top-level column name, can't be a struct
     *           field path like 'foo.bar'.
     *     @type int $default_missing_value_interpretation
     *           Optional. Default missing value interpretation for all columns in the
     *           table. When a value is specified on an `AppendRowsRequest`, it is applied
     *           to all requests on the connection from that point forward, until a
     *           subsequent `AppendRowsRequest` sets it to a different value.
     *           `missing_value_interpretation` can override
     *           `default_missing_value_interpretation`. For example, if you want to write
     *           `NULL` instead of using default values for some columns, you can set
     *           `default_missing_value_interpretation` to `DEFAULT_VALUE` and at the same
     *           time, set `missing_value_interpretations` to `NULL_VALUE` on those columns.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The write_stream identifies the append operation. It must be
     * provided in the following scenarios:
     * * In the first request to an AppendRows connection.
     * * In all subsequent requests to an AppendRows connection, if you use the
     * same connection to write to multiple tables or change the input schema for
     * default streams.
     * For explicitly created write streams, the format is:
     * * `projects/{project}/datasets/{dataset}/tables/{table}/streams/{id}`
     * For the special default stream, the format is:
     * * `projects/{project}/datasets/{dataset}/tables/{table}/streams/_default`.
     * An example of a possible sequence of requests with write_stream fields
     * within a single connection:
     * * r1: {write_stream: stream_name_1}
     * * r2: {write_stream: /&#42;omit*&#47;}
     * * r3: {write_stream: /&#42;omit*&#47;}
     * * r4: {write_stream: stream_name_2}
     * * r5: {write_stream: stream_name_2}
     * The destination changed in request_4, so the write_stream field must be
     * populated in all subsequent requests in this stream.
     *
     * Generated from protobuf field <code>string write_stream = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getWriteStream()
    {
        return $this->write_stream;
    }

    /**
     * Required. The write_stream identifies the append operation. It must be
     * provided in the following scenarios:
     * * In the first request to an AppendRows connection.
     * * In all subsequent requests to an AppendRows connection, if you use the
     * same connection to write to multiple tables or change the input schema for
     * default streams.
     * For explicitly created write streams, the format is:
     * * `projects/{project}/datasets/{dataset}/tables/{table}/streams/{id}`
     * For the special default stream, the format is:
     * * `projects/{project}/datasets/{dataset}/tables/{table}/streams/_default`.
     * An example of a possible sequence of requests with write_stream fields
     * within a single connection:
     * * r1: {write_stream: stream_name_1}
     * * r2: {write_stream: /&#42;omit*&#47;}
     * * r3: {write_stream: /&#42;omit*&#47;}
     * * r4: {write_stream: stream_name_2}
     * * r5: {write_stream: stream_name_2}
     * The destination changed in request_4, so the write_stream field must be
     * populated in all subsequent requests in this stream.
     *
     * Generated from protobuf field <code>string write_stream = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setWriteStream($var)
    {
        GPBUtil::checkString($var, True);
        $this->write_stream = $var;

        return $this;
    }

    /**
     * If present, the write is only performed if the next append offset is same
     * as the provided value. If not present, the write is performed at the
     * current end of stream. Specifying a value for this field is not allowed
     * when calling AppendRows for the '_default' stream.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value offset = 2;</code>
     * @return \Google\Protobuf\Int64Value|null
     */
    public function getOffset()
    {
        return $this->offset;
    }

    public function hasOffset()
    {
        return isset($this->offset);
    }

    public function clearOffset()
    {
        unset($this->offset);
    }

    /**
     * Returns the unboxed value from <code>getOffset()</code>

     * If present, the write is only performed if the next append offset is same
     * as the provided value. If not present, the write is performed at the
     * current end of stream. Specifying a value for this field is not allowed
     * when calling AppendRows for the '_default' stream.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value offset = 2;</code>
     * @return int|string|null
     */
    public function getOffsetUnwrapped()
    {
        return $this->readWrapperValue("offset");
    }

    /**
     * If present, the write is only performed if the next append offset is same
     * as the provided value. If not present, the write is performed at the
     * current end of stream. Specifying a value for this field is not allowed
     * when calling AppendRows for the '_default' stream.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value offset = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->offset = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * If present, the write is only performed if the next append offset is same
     * as the provided value. If not present, the write is performed at the
     * current end of stream. Specifying a value for this field is not allowed
     * when calling AppendRows for the '_default' stream.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value offset = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setOffsetUnwrapped($var)
    {
        $this->writeWrapperValue("offset", $var);
        return $this;}

    /**
     * Rows in proto format.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.AppendRowsRequest.ProtoData proto_rows = 4;</code>
     * @return \Google\Cloud\BigQuery\Storage\V1\AppendRowsRequest\ProtoData|null
     */
    public function getProtoRows()
    {
        return $this->readOneof(4);
    }

    public function hasProtoRows()
    {
        return $this->hasOneof(4);
    }

    /**
     * Rows in proto format.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.AppendRowsRequest.ProtoData proto_rows = 4;</code>
     * @param \Google\Cloud\BigQuery\Storage\V1\AppendRowsRequest\ProtoData $var
     * @return $this
     */
    public function setProtoRows($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Storage\V1\AppendRowsRequest\ProtoData::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Rows in arrow format. This is an experimental feature only selected for
     * allowlisted customers.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.AppendRowsRequest.ArrowData arrow_rows = 5;</code>
     * @return \Google\Cloud\BigQuery\Storage\V1\AppendRowsRequest\ArrowData|null
     */
    public function getArrowRows()
    {
        return $this->readOneof(5);
    }

    public function hasArrowRows()
    {
        return $this->hasOneof(5);
    }

    /**
     * Rows in arrow format. This is an experimental feature only selected for
     * allowlisted customers.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.AppendRowsRequest.ArrowData arrow_rows = 5;</code>
     * @param \Google\Cloud\BigQuery\Storage\V1\AppendRowsRequest\ArrowData $var
     * @return $this
     */
    public function setArrowRows($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Storage\V1\AppendRowsRequest\ArrowData::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Id set by client to annotate its identity. Only initial request setting is
     * respected.
     *
     * Generated from protobuf field <code>string trace_id = 6;</code>
     * @return string
     */
    public function getTraceId()
    {
        return $this->trace_id;
    }

    /**
     * Id set by client to annotate its identity. Only initial request setting is
     * respected.
     *
     * Generated from protobuf field <code>string trace_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setTraceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->trace_id = $var;

        return $this;
    }

    /**
     * A map to indicate how to interpret missing value for some fields. Missing
     * values are fields present in user schema but missing in rows. The key is
     * the field name. The value is the interpretation of missing values for the
     * field.
     * For example, a map {'foo': NULL_VALUE, 'bar': DEFAULT_VALUE} means all
     * missing values in field foo are interpreted as NULL, all missing values in
     * field bar are interpreted as the default value of field bar in table
     * schema.
     * If a field is not in this map and has missing values, the missing values
     * in this field are interpreted as NULL.
     * This field only applies to the current request, it won't affect other
     * requests on the connection.
     * Currently, field name can only be top-level column name, can't be a struct
     * field path like 'foo.bar'.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.bigquery.storage.v1.AppendRowsRequest.MissingValueInterpretation> missing_value_interpretations = 7;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMissingValueInterpretations()
    {
        return $this->missing_value_interpretations;
    }

    /**
     * A map to indicate how to interpret missing value for some fields. Missing
     * values are fields present in user schema but missing in rows. The key is
     * the field name. The value is the interpretation of missing values for the
     * field.
     * For example, a map {'foo': NULL_VALUE, 'bar': DEFAULT_VALUE} means all
     * missing values in field foo are interpreted as NULL, all missing values in
     * field bar are interpreted as the default value of field bar in table
     * schema.
     * If a field is not in this map and has missing values, the missing values
     * in this field are interpreted as NULL.
     * This field only applies to the current request, it won't affect other
     * requests on the connection.
     * Currently, field name can only be top-level column name, can't be a struct
     * field path like 'foo.bar'.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.bigquery.storage.v1.AppendRowsRequest.MissingValueInterpretation> missing_value_interpretations = 7;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMissingValueInterpretations($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\BigQuery\Storage\V1\AppendRowsRequest\MissingValueInterpretation::class);
        $this->missing_value_interpretations = $arr;

        return $this;
    }

    /**
     * Optional. Default missing value interpretation for all columns in the
     * table. When a value is specified on an `AppendRowsRequest`, it is applied
     * to all requests on the connection from that point forward, until a
     * subsequent `AppendRowsRequest` sets it to a different value.
     * `missing_value_interpretation` can override
     * `default_missing_value_interpretation`. For example, if you want to write
     * `NULL` instead of using default values for some columns, you can set
     * `default_missing_value_interpretation` to `DEFAULT_VALUE` and at the same
     * time, set `missing_value_interpretations` to `NULL_VALUE` on those columns.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.AppendRowsRequest.MissingValueInterpretation default_missing_value_interpretation = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getDefaultMissingValueInterpretation()
    {
        return $this->default_missing_value_interpretation;
    }

    /**
     * Optional. Default missing value interpretation for all columns in the
     * table. When a value is specified on an `AppendRowsRequest`, it is applied
     * to all requests on the connection from that point forward, until a
     * subsequent `AppendRowsRequest` sets it to a different value.
     * `missing_value_interpretation` can override
     * `default_missing_value_interpretation`. For example, if you want to write
     * `NULL` instead of using default values for some columns, you can set
     * `default_missing_value_interpretation` to `DEFAULT_VALUE` and at the same
     * time, set `missing_value_interpretations` to `NULL_VALUE` on those columns.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.AppendRowsRequest.MissingValueInterpretation default_missing_value_interpretation = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setDefaultMissingValueInterpretation($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BigQuery\Storage\V1\AppendRowsRequest\MissingValueInterpretation::class);
        $this->default_missing_value_interpretation = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getRows()
    {
        return $this->whichOneof("rows");
    }

}

