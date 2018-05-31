<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="VerifyQRCodeOptionsData.php">
 *   Copyright (c) 2003-2018 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */
/*
 * VerifyQRCodeOptionsData
 */

namespace GroupDocs\Signature\Model;
use \GroupDocs\Signature\ObjectSerializer;

/*
 * VerifyQRCodeOptionsData
 *
 * @description Verify QRCode Options - keeps options to verify QRCode Signature of Document
 */
class VerifyQRCodeOptionsData extends VerifyTextOptionsData 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "VerifyQRCodeOptionsData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'qRCodeTypeName' => 'string',
        'matchType' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'qRCodeTypeName' => null,
        'matchType' => null
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'qRCodeTypeName' => 'QRCodeTypeName',
        'matchType' => 'MatchType'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'qRCodeTypeName' => 'setQRCodeTypeName',
        'matchType' => 'setMatchType'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'qRCodeTypeName' => 'getQRCodeTypeName',
        'matchType' => 'getMatchType'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    /*
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const MATCH_TYPE_EXACT = 'Exact';
    const MATCH_TYPE_STARTS_WITH = 'StartsWith';
    const MATCH_TYPE_ENDS_WITH = 'EndsWith';
    const MATCH_TYPE_CONTAINS = 'Contains';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMatchTypeAllowableValues()
    {
        return [
            self::MATCH_TYPE_EXACT,
            self::MATCH_TYPE_STARTS_WITH,
            self::MATCH_TYPE_ENDS_WITH,
            self::MATCH_TYPE_CONTAINS,
        ];
    }
    


    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['qRCodeTypeName'] = isset($data['qRCodeTypeName']) ? $data['qRCodeTypeName'] : null;
        $this->container['matchType'] = isset($data['matchType']) ? $data['matchType'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getMatchTypeAllowableValues();
        if (!in_array($this->container['matchType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'matchType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /*
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        if (!parent::valid()) {
            return false;
        }

        $allowedValues = $this->getMatchTypeAllowableValues();
        if (!in_array($this->container['matchType'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets qRCodeTypeName
     *
     * @return string
     */
    public function getQRCodeTypeName()
    {
        return $this->container['qRCodeTypeName'];
    }

    /*
     * Sets qRCodeTypeName
     *
     * @param string $qRCodeTypeName Get or set QRCode Type Name verification.
     *
     * @return $this
     */
    public function setQRCodeTypeName($qRCodeTypeName)
    {
        $this->container['qRCodeTypeName'] = $qRCodeTypeName;

        return $this;
    }

    /*
     * Gets matchType
     *
     * @return string
     */
    public function getMatchType()
    {
        return $this->container['matchType'];
    }

    /*
     * Sets matchType
     *
     * @param string $matchType Get or set Text Match Type verification.
     *
     * @return $this
     */
    public function setMatchType($matchType)
    {
        $allowedValues = $this->getMatchTypeAllowableValues();
        if ((!is_numeric($matchType) && !in_array($matchType, $allowedValues)) || (is_numeric($matchType) && !in_array($allowedValues[$matchType], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'matchType', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['matchType'] = $matchType;

        return $this;
    }
    /*
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

    /*
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

    /*
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

    /*
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

    /*
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

