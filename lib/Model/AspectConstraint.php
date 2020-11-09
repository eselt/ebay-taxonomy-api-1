<?php
/**
 * AspectConstraint
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Taxonomy API
 *
 * Use the Taxonomy API to discover the most appropriate eBay categories under which sellers can offer inventory items for sale, and the most likely categories under which buyers can browse or search for items to purchase. In addition, the Taxonomy API provides metadata about the required and recommended category aspects to include in listings, and also has two operations to retrieve parts compatibility information.
 *
 * The version of the OpenAPI document: v1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * AspectConstraint Class Doc Comment
 *
 * @category Class
 * @description This type contains information about the formatting, occurrence, and support of an aspect.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AspectConstraint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AspectConstraint';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'aspect_applicable_to' => 'string[]',
        'aspect_data_type' => 'string',
        'aspect_enabled_for_variations' => 'bool',
        'aspect_format' => 'string',
        'aspect_max_length' => 'int',
        'aspect_mode' => 'string',
        'aspect_required' => 'bool',
        'aspect_usage' => 'string',
        'expected_required_by_date' => 'string',
        'item_to_aspect_cardinality' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'aspect_applicable_to' => null,
        'aspect_data_type' => null,
        'aspect_enabled_for_variations' => null,
        'aspect_format' => null,
        'aspect_max_length' => 'int32',
        'aspect_mode' => null,
        'aspect_required' => null,
        'aspect_usage' => null,
        'expected_required_by_date' => null,
        'item_to_aspect_cardinality' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'aspect_applicable_to' => 'aspectApplicableTo',
        'aspect_data_type' => 'aspectDataType',
        'aspect_enabled_for_variations' => 'aspectEnabledForVariations',
        'aspect_format' => 'aspectFormat',
        'aspect_max_length' => 'aspectMaxLength',
        'aspect_mode' => 'aspectMode',
        'aspect_required' => 'aspectRequired',
        'aspect_usage' => 'aspectUsage',
        'expected_required_by_date' => 'expectedRequiredByDate',
        'item_to_aspect_cardinality' => 'itemToAspectCardinality'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aspect_applicable_to' => 'setAspectApplicableTo',
        'aspect_data_type' => 'setAspectDataType',
        'aspect_enabled_for_variations' => 'setAspectEnabledForVariations',
        'aspect_format' => 'setAspectFormat',
        'aspect_max_length' => 'setAspectMaxLength',
        'aspect_mode' => 'setAspectMode',
        'aspect_required' => 'setAspectRequired',
        'aspect_usage' => 'setAspectUsage',
        'expected_required_by_date' => 'setExpectedRequiredByDate',
        'item_to_aspect_cardinality' => 'setItemToAspectCardinality'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aspect_applicable_to' => 'getAspectApplicableTo',
        'aspect_data_type' => 'getAspectDataType',
        'aspect_enabled_for_variations' => 'getAspectEnabledForVariations',
        'aspect_format' => 'getAspectFormat',
        'aspect_max_length' => 'getAspectMaxLength',
        'aspect_mode' => 'getAspectMode',
        'aspect_required' => 'getAspectRequired',
        'aspect_usage' => 'getAspectUsage',
        'expected_required_by_date' => 'getExpectedRequiredByDate',
        'item_to_aspect_cardinality' => 'getItemToAspectCardinality'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['aspect_applicable_to'] = isset($data['aspect_applicable_to']) ? $data['aspect_applicable_to'] : null;
        $this->container['aspect_data_type'] = isset($data['aspect_data_type']) ? $data['aspect_data_type'] : null;
        $this->container['aspect_enabled_for_variations'] = isset($data['aspect_enabled_for_variations']) ? $data['aspect_enabled_for_variations'] : null;
        $this->container['aspect_format'] = isset($data['aspect_format']) ? $data['aspect_format'] : null;
        $this->container['aspect_max_length'] = isset($data['aspect_max_length']) ? $data['aspect_max_length'] : null;
        $this->container['aspect_mode'] = isset($data['aspect_mode']) ? $data['aspect_mode'] : null;
        $this->container['aspect_required'] = isset($data['aspect_required']) ? $data['aspect_required'] : null;
        $this->container['aspect_usage'] = isset($data['aspect_usage']) ? $data['aspect_usage'] : null;
        $this->container['expected_required_by_date'] = isset($data['expected_required_by_date']) ? $data['expected_required_by_date'] : null;
        $this->container['item_to_aspect_cardinality'] = isset($data['item_to_aspect_cardinality']) ? $data['item_to_aspect_cardinality'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets aspect_applicable_to
     *
     * @return string[]|null
     */
    public function getAspectApplicableTo()
    {
        return $this->container['aspect_applicable_to'];
    }

    /**
     * Sets aspect_applicable_to
     *
     * @param string[]|null $aspect_applicable_to This value indicate if the aspect identified by the aspects.localizedAspectName field is a product aspect (relevant to catalog products in the category) or an item/instance aspect, which is an aspect whose value will vary based on a particular instance of the product.
     *
     * @return $this
     */
    public function setAspectApplicableTo($aspect_applicable_to)
    {
        $this->container['aspect_applicable_to'] = $aspect_applicable_to;

        return $this;
    }

    /**
     * Gets aspect_data_type
     *
     * @return string|null
     */
    public function getAspectDataType()
    {
        return $this->container['aspect_data_type'];
    }

    /**
     * Sets aspect_data_type
     *
     * @param string|null $aspect_data_type The data type of this aspect. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:AspectDataTypeEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setAspectDataType($aspect_data_type)
    {
        $this->container['aspect_data_type'] = $aspect_data_type;

        return $this;
    }

    /**
     * Gets aspect_enabled_for_variations
     *
     * @return bool|null
     */
    public function getAspectEnabledForVariations()
    {
        return $this->container['aspect_enabled_for_variations'];
    }

    /**
     * Sets aspect_enabled_for_variations
     *
     * @param bool|null $aspect_enabled_for_variations A value of true indicates that this aspect can be used to help identify item variations.
     *
     * @return $this
     */
    public function setAspectEnabledForVariations($aspect_enabled_for_variations)
    {
        $this->container['aspect_enabled_for_variations'] = $aspect_enabled_for_variations;

        return $this;
    }

    /**
     * Gets aspect_format
     *
     * @return string|null
     */
    public function getAspectFormat()
    {
        return $this->container['aspect_format'];
    }

    /**
     * Sets aspect_format
     *
     * @param string|null $aspect_format Returned only if the value of aspectDataType identifies a data type that requires specific formatting. Currently, this field provides formatting hints as follows: DATE: YYYY, YYYYMM, YYYYMMDD NUMBER: int32, double
     *
     * @return $this
     */
    public function setAspectFormat($aspect_format)
    {
        $this->container['aspect_format'] = $aspect_format;

        return $this;
    }

    /**
     * Gets aspect_max_length
     *
     * @return int|null
     */
    public function getAspectMaxLength()
    {
        return $this->container['aspect_max_length'];
    }

    /**
     * Sets aspect_max_length
     *
     * @param int|null $aspect_max_length The maximum length of the item/instance aspect's value. The seller must make sure not to exceed this length when specifying the instance aspect's value for a product. This field is only returned for instance aspects.
     *
     * @return $this
     */
    public function setAspectMaxLength($aspect_max_length)
    {
        $this->container['aspect_max_length'] = $aspect_max_length;

        return $this;
    }

    /**
     * Gets aspect_mode
     *
     * @return string|null
     */
    public function getAspectMode()
    {
        return $this->container['aspect_mode'];
    }

    /**
     * Sets aspect_mode
     *
     * @param string|null $aspect_mode The manner in which values of this aspect must be specified by the seller (as free text or by selecting from available options). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:AspectModeEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setAspectMode($aspect_mode)
    {
        $this->container['aspect_mode'] = $aspect_mode;

        return $this;
    }

    /**
     * Gets aspect_required
     *
     * @return bool|null
     */
    public function getAspectRequired()
    {
        return $this->container['aspect_required'];
    }

    /**
     * Sets aspect_required
     *
     * @param bool|null $aspect_required A value of true indicates that this aspect is required when offering items in the specified category.
     *
     * @return $this
     */
    public function setAspectRequired($aspect_required)
    {
        $this->container['aspect_required'] = $aspect_required;

        return $this;
    }

    /**
     * Gets aspect_usage
     *
     * @return string|null
     */
    public function getAspectUsage()
    {
        return $this->container['aspect_usage'];
    }

    /**
     * Sets aspect_usage
     *
     * @param string|null $aspect_usage The enumeration value returned in this field will indicate if the corresponding aspect is recommended or optional. Note: This field is always returned, even for hard-mandated/required aspects (where aspectRequired: true). The value returned for required aspects will be RECOMMENDED, but they are actually required and a seller will be blocked from listing or revising an item without these aspects. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:AspectUsageEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setAspectUsage($aspect_usage)
    {
        $this->container['aspect_usage'] = $aspect_usage;

        return $this;
    }

    /**
     * Gets expected_required_by_date
     *
     * @return string|null
     */
    public function getExpectedRequiredByDate()
    {
        return $this->container['expected_required_by_date'];
    }

    /**
     * Sets expected_required_by_date
     *
     * @param string|null $expected_required_by_date The expected date after which the aspect will be required. Note: The value returned in this field specifies only an approximate date, which may not reflect the actual date after which the aspect is required.
     *
     * @return $this
     */
    public function setExpectedRequiredByDate($expected_required_by_date)
    {
        $this->container['expected_required_by_date'] = $expected_required_by_date;

        return $this;
    }

    /**
     * Gets item_to_aspect_cardinality
     *
     * @return string|null
     */
    public function getItemToAspectCardinality()
    {
        return $this->container['item_to_aspect_cardinality'];
    }

    /**
     * Sets item_to_aspect_cardinality
     *
     * @param string|null $item_to_aspect_cardinality Indicates whether this aspect can accept single or multiple values for items in the specified category. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:ItemToAspectCardinalityEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setItemToAspectCardinality($item_to_aspect_cardinality)
    {
        $this->container['item_to_aspect_cardinality'] = $item_to_aspect_cardinality;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


