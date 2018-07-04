<?php
/**
 * Economy
 *
 * PHP version 5
 *
 * @category Class
 * @package  marketcheck\api\sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketcheck Cars API
 *
 * <b>Access the New, Used and Certified cars inventories for all Car Dealers in US.</b> <br/>The data is sourced from online listings by over 44,000 Car dealers in US. At any time, there are about 6.2M searchable listings (about 1.9M unique VINs) for Used & Certified cars and about 6.6M (about 3.9M unique VINs) New Car listings from all over US. We use this API at the back for our website <a href='https://www.marketcheck.com' target='_blank'>www.marketcheck.com</a> and our Android and iOS mobile apps too.<br/><h5> Few useful links : </h5><ul><li>A quick view of the API and the use cases is depicated <a href='https://portals.marketcheck.com/mcapi/' target='_blank'>here</a></li><li>The Postman collection with various usages of the API is shared here https://www.getpostman.com/collections/2752684ff636cdd7bac2</li></ul>
 *
 * OpenAPI spec version: 1.0.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace marketcheck\api\sdk\Model;

use \ArrayAccess;
use \marketcheck\api\sdk\ObjectSerializer;

/**
 * Economy Class Doc Comment
 *
 * @category Class
 * @package  marketcheck\api\sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Economy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Economy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ghg_emissions_rating' => 'float',
        'ghg_emissions_indicator' => 'string',
        'smog_rating' => 'float',
        'smog_indicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ghg_emissions_rating' => null,
        'ghg_emissions_indicator' => null,
        'smog_rating' => null,
        'smog_indicator' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'ghg_emissions_rating' => 'ghg_emissions_rating',
        'ghg_emissions_indicator' => 'ghg_emissions_indicator',
        'smog_rating' => 'smog_rating',
        'smog_indicator' => 'smog_indicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ghg_emissions_rating' => 'setGhgEmissionsRating',
        'ghg_emissions_indicator' => 'setGhgEmissionsIndicator',
        'smog_rating' => 'setSmogRating',
        'smog_indicator' => 'setSmogIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ghg_emissions_rating' => 'getGhgEmissionsRating',
        'ghg_emissions_indicator' => 'getGhgEmissionsIndicator',
        'smog_rating' => 'getSmogRating',
        'smog_indicator' => 'getSmogIndicator'
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
        return self::$swaggerModelName;
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
        $this->container['ghg_emissions_rating'] = isset($data['ghg_emissions_rating']) ? $data['ghg_emissions_rating'] : null;
        $this->container['ghg_emissions_indicator'] = isset($data['ghg_emissions_indicator']) ? $data['ghg_emissions_indicator'] : null;
        $this->container['smog_rating'] = isset($data['smog_rating']) ? $data['smog_rating'] : null;
        $this->container['smog_indicator'] = isset($data['smog_indicator']) ? $data['smog_indicator'] : null;
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
     * Gets ghg_emissions_rating
     *
     * @return float
     */
    public function getGhgEmissionsRating()
    {
        return $this->container['ghg_emissions_rating'];
    }

    /**
     * Sets ghg_emissions_rating
     *
     * @param float $ghg_emissions_rating Show vehicle impact on climate change in terms of greeenhouse gases. This rating will be in the range of 1 - 10
     *
     * @return $this
     */
    public function setGhgEmissionsRating($ghg_emissions_rating)
    {
        $this->container['ghg_emissions_rating'] = $ghg_emissions_rating;

        return $this;
    }

    /**
     * Gets ghg_emissions_indicator
     *
     * @return string
     */
    public function getGhgEmissionsIndicator()
    {
        return $this->container['ghg_emissions_indicator'];
    }

    /**
     * Sets ghg_emissions_indicator
     *
     * @param string $ghg_emissions_indicator Contains text like bad|Good|Very Good| Excellent
     *
     * @return $this
     */
    public function setGhgEmissionsIndicator($ghg_emissions_indicator)
    {
        $this->container['ghg_emissions_indicator'] = $ghg_emissions_indicator;

        return $this;
    }

    /**
     * Gets smog_rating
     *
     * @return float
     */
    public function getSmogRating()
    {
        return $this->container['smog_rating'];
    }

    /**
     * Sets smog_rating
     *
     * @param float $smog_rating Shows vehicle's emissions of pollutants known to cause smog and other forms of air pollution. This rating will be in the range of 1 - 10
     *
     * @return $this
     */
    public function setSmogRating($smog_rating)
    {
        $this->container['smog_rating'] = $smog_rating;

        return $this;
    }

    /**
     * Gets smog_indicator
     *
     * @return string
     */
    public function getSmogIndicator()
    {
        return $this->container['smog_indicator'];
    }

    /**
     * Sets smog_indicator
     *
     * @param string $smog_indicator Contains text like bad|Good|Very Good| Excellent
     *
     * @return $this
     */
    public function setSmogIndicator($smog_indicator)
    {
        $this->container['smog_indicator'] = $smog_indicator;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

