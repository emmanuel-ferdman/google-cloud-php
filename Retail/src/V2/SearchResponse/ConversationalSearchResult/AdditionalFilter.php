<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/search_service.proto

namespace Google\Cloud\Retail\V2\SearchResponse\ConversationalSearchResult;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Additional filter that client side need to apply.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.SearchResponse.ConversationalSearchResult.AdditionalFilter</code>
 */
class AdditionalFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Product attribute value, including an attribute key and an
     * attribute value. Other types can be added here in the future.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.ProductAttributeValue product_attribute_value = 1;</code>
     */
    protected $product_attribute_value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Retail\V2\ProductAttributeValue $product_attribute_value
     *           Product attribute value, including an attribute key and an
     *           attribute value. Other types can be added here in the future.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Product attribute value, including an attribute key and an
     * attribute value. Other types can be added here in the future.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.ProductAttributeValue product_attribute_value = 1;</code>
     * @return \Google\Cloud\Retail\V2\ProductAttributeValue|null
     */
    public function getProductAttributeValue()
    {
        return $this->product_attribute_value;
    }

    public function hasProductAttributeValue()
    {
        return isset($this->product_attribute_value);
    }

    public function clearProductAttributeValue()
    {
        unset($this->product_attribute_value);
    }

    /**
     * Product attribute value, including an attribute key and an
     * attribute value. Other types can be added here in the future.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.ProductAttributeValue product_attribute_value = 1;</code>
     * @param \Google\Cloud\Retail\V2\ProductAttributeValue $var
     * @return $this
     */
    public function setProductAttributeValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\ProductAttributeValue::class);
        $this->product_attribute_value = $var;

        return $this;
    }

}


