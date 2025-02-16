<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/dataexchange/v1beta1/dataexchange.proto

namespace Google\Cloud\BigQuery\DataExchange\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A listing is what gets published into a data exchange that a subscriber can
 * subscribe to. It contains a reference to the data source along with
 * descriptive information that will help subscribers find and subscribe the
 * data.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.dataexchange.v1beta1.Listing</code>
 */
class Listing extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the listing.
     * e.g. `projects/myproject/locations/US/dataExchanges/123/listings/456`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Required. Human-readable display name of the listing. The display name must contain
     * only Unicode letters, numbers (0-9), underscores (_), dashes (-), spaces
     * ( ), ampersands (&) and can't start or end with spaces.
     * Default value is an empty string.
     * Max length: 63 bytes.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * Optional. Short description of the listing. The description must not contain
     * Unicode non-characters and C0 and C1 control codes except tabs (HT),
     * new lines (LF), carriage returns (CR), and page breaks (FF).
     * Default value is an empty string.
     * Max length: 2000 bytes.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Optional. Email or URL of the primary point of contact of the listing.
     * Max Length: 1000 bytes.
     *
     * Generated from protobuf field <code>string primary_contact = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $primary_contact = '';
    /**
     * Optional. Documentation describing the listing.
     *
     * Generated from protobuf field <code>string documentation = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $documentation = '';
    /**
     * Output only. Current state of the listing.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.dataexchange.v1beta1.Listing.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Optional. Base64 encoded image representing the listing. Max Size: 3.0MiB
     * Expected image dimensions are 512x512 pixels, however the API only
     * performs validation on size of the encoded data.
     * Note: For byte fields, the contents of the field are base64-encoded (which
     * increases the size of the data by 33-36%) when using JSON on the wire.
     *
     * Generated from protobuf field <code>bytes icon = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $icon = '';
    /**
     * Optional. Details of the data provider who owns the source data.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.dataexchange.v1beta1.DataProvider data_provider = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $data_provider = null;
    /**
     * Optional. Categories of the listing. Up to two categories are allowed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.dataexchange.v1beta1.Listing.Category categories = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $categories;
    /**
     * Optional. Details of the publisher who owns the listing and who can share
     * the source data.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.dataexchange.v1beta1.Publisher publisher = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $publisher = null;
    /**
     * Optional. Email or URL of the request access of the listing.
     * Subscribers can use this reference to request access.
     * Max Length: 1000 bytes.
     *
     * Generated from protobuf field <code>string request_access = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_access = '';
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\BigQuery\DataExchange\V1beta1\Listing\BigQueryDatasetSource $bigquery_dataset
     *           Required. Shared dataset i.e. BigQuery dataset source.
     *     @type string $name
     *           Output only. The resource name of the listing.
     *           e.g. `projects/myproject/locations/US/dataExchanges/123/listings/456`
     *     @type string $display_name
     *           Required. Human-readable display name of the listing. The display name must contain
     *           only Unicode letters, numbers (0-9), underscores (_), dashes (-), spaces
     *           ( ), ampersands (&) and can't start or end with spaces.
     *           Default value is an empty string.
     *           Max length: 63 bytes.
     *     @type string $description
     *           Optional. Short description of the listing. The description must not contain
     *           Unicode non-characters and C0 and C1 control codes except tabs (HT),
     *           new lines (LF), carriage returns (CR), and page breaks (FF).
     *           Default value is an empty string.
     *           Max length: 2000 bytes.
     *     @type string $primary_contact
     *           Optional. Email or URL of the primary point of contact of the listing.
     *           Max Length: 1000 bytes.
     *     @type string $documentation
     *           Optional. Documentation describing the listing.
     *     @type int $state
     *           Output only. Current state of the listing.
     *     @type string $icon
     *           Optional. Base64 encoded image representing the listing. Max Size: 3.0MiB
     *           Expected image dimensions are 512x512 pixels, however the API only
     *           performs validation on size of the encoded data.
     *           Note: For byte fields, the contents of the field are base64-encoded (which
     *           increases the size of the data by 33-36%) when using JSON on the wire.
     *     @type \Google\Cloud\BigQuery\DataExchange\V1beta1\DataProvider $data_provider
     *           Optional. Details of the data provider who owns the source data.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $categories
     *           Optional. Categories of the listing. Up to two categories are allowed.
     *     @type \Google\Cloud\BigQuery\DataExchange\V1beta1\Publisher $publisher
     *           Optional. Details of the publisher who owns the listing and who can share
     *           the source data.
     *     @type string $request_access
     *           Optional. Email or URL of the request access of the listing.
     *           Subscribers can use this reference to request access.
     *           Max Length: 1000 bytes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Dataexchange\V1Beta1\Dataexchange::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Shared dataset i.e. BigQuery dataset source.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.dataexchange.v1beta1.Listing.BigQueryDatasetSource bigquery_dataset = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\BigQuery\DataExchange\V1beta1\Listing\BigQueryDatasetSource|null
     */
    public function getBigqueryDataset()
    {
        return $this->readOneof(6);
    }

    public function hasBigqueryDataset()
    {
        return $this->hasOneof(6);
    }

    /**
     * Required. Shared dataset i.e. BigQuery dataset source.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.dataexchange.v1beta1.Listing.BigQueryDatasetSource bigquery_dataset = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\BigQuery\DataExchange\V1beta1\Listing\BigQueryDatasetSource $var
     * @return $this
     */
    public function setBigqueryDataset($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\DataExchange\V1beta1\Listing\BigQueryDatasetSource::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Output only. The resource name of the listing.
     * e.g. `projects/myproject/locations/US/dataExchanges/123/listings/456`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the listing.
     * e.g. `projects/myproject/locations/US/dataExchanges/123/listings/456`
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
     * Required. Human-readable display name of the listing. The display name must contain
     * only Unicode letters, numbers (0-9), underscores (_), dashes (-), spaces
     * ( ), ampersands (&) and can't start or end with spaces.
     * Default value is an empty string.
     * Max length: 63 bytes.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. Human-readable display name of the listing. The display name must contain
     * only Unicode letters, numbers (0-9), underscores (_), dashes (-), spaces
     * ( ), ampersands (&) and can't start or end with spaces.
     * Default value is an empty string.
     * Max length: 63 bytes.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Optional. Short description of the listing. The description must not contain
     * Unicode non-characters and C0 and C1 control codes except tabs (HT),
     * new lines (LF), carriage returns (CR), and page breaks (FF).
     * Default value is an empty string.
     * Max length: 2000 bytes.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Short description of the listing. The description must not contain
     * Unicode non-characters and C0 and C1 control codes except tabs (HT),
     * new lines (LF), carriage returns (CR), and page breaks (FF).
     * Default value is an empty string.
     * Max length: 2000 bytes.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Optional. Email or URL of the primary point of contact of the listing.
     * Max Length: 1000 bytes.
     *
     * Generated from protobuf field <code>string primary_contact = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPrimaryContact()
    {
        return $this->primary_contact;
    }

    /**
     * Optional. Email or URL of the primary point of contact of the listing.
     * Max Length: 1000 bytes.
     *
     * Generated from protobuf field <code>string primary_contact = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPrimaryContact($var)
    {
        GPBUtil::checkString($var, True);
        $this->primary_contact = $var;

        return $this;
    }

    /**
     * Optional. Documentation describing the listing.
     *
     * Generated from protobuf field <code>string documentation = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Optional. Documentation describing the listing.
     *
     * Generated from protobuf field <code>string documentation = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDocumentation($var)
    {
        GPBUtil::checkString($var, True);
        $this->documentation = $var;

        return $this;
    }

    /**
     * Output only. Current state of the listing.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.dataexchange.v1beta1.Listing.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. Current state of the listing.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.dataexchange.v1beta1.Listing.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BigQuery\DataExchange\V1beta1\Listing\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Optional. Base64 encoded image representing the listing. Max Size: 3.0MiB
     * Expected image dimensions are 512x512 pixels, however the API only
     * performs validation on size of the encoded data.
     * Note: For byte fields, the contents of the field are base64-encoded (which
     * increases the size of the data by 33-36%) when using JSON on the wire.
     *
     * Generated from protobuf field <code>bytes icon = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Optional. Base64 encoded image representing the listing. Max Size: 3.0MiB
     * Expected image dimensions are 512x512 pixels, however the API only
     * performs validation on size of the encoded data.
     * Note: For byte fields, the contents of the field are base64-encoded (which
     * increases the size of the data by 33-36%) when using JSON on the wire.
     *
     * Generated from protobuf field <code>bytes icon = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setIcon($var)
    {
        GPBUtil::checkString($var, False);
        $this->icon = $var;

        return $this;
    }

    /**
     * Optional. Details of the data provider who owns the source data.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.dataexchange.v1beta1.DataProvider data_provider = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\BigQuery\DataExchange\V1beta1\DataProvider|null
     */
    public function getDataProvider()
    {
        return $this->data_provider;
    }

    public function hasDataProvider()
    {
        return isset($this->data_provider);
    }

    public function clearDataProvider()
    {
        unset($this->data_provider);
    }

    /**
     * Optional. Details of the data provider who owns the source data.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.dataexchange.v1beta1.DataProvider data_provider = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\BigQuery\DataExchange\V1beta1\DataProvider $var
     * @return $this
     */
    public function setDataProvider($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\DataExchange\V1beta1\DataProvider::class);
        $this->data_provider = $var;

        return $this;
    }

    /**
     * Optional. Categories of the listing. Up to two categories are allowed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.dataexchange.v1beta1.Listing.Category categories = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Optional. Categories of the listing. Up to two categories are allowed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.dataexchange.v1beta1.Listing.Category categories = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCategories($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\BigQuery\DataExchange\V1beta1\Listing\Category::class);
        $this->categories = $arr;

        return $this;
    }

    /**
     * Optional. Details of the publisher who owns the listing and who can share
     * the source data.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.dataexchange.v1beta1.Publisher publisher = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\BigQuery\DataExchange\V1beta1\Publisher|null
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    public function hasPublisher()
    {
        return isset($this->publisher);
    }

    public function clearPublisher()
    {
        unset($this->publisher);
    }

    /**
     * Optional. Details of the publisher who owns the listing and who can share
     * the source data.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.dataexchange.v1beta1.Publisher publisher = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\BigQuery\DataExchange\V1beta1\Publisher $var
     * @return $this
     */
    public function setPublisher($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\DataExchange\V1beta1\Publisher::class);
        $this->publisher = $var;

        return $this;
    }

    /**
     * Optional. Email or URL of the request access of the listing.
     * Subscribers can use this reference to request access.
     * Max Length: 1000 bytes.
     *
     * Generated from protobuf field <code>string request_access = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestAccess()
    {
        return $this->request_access;
    }

    /**
     * Optional. Email or URL of the request access of the listing.
     * Subscribers can use this reference to request access.
     * Max Length: 1000 bytes.
     *
     * Generated from protobuf field <code>string request_access = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestAccess($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_access = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

