<?php
/**
 * MasksPreviewParameters
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Picsart Image Tools API
 *
 * ## Introduction Picsart Image Tools API is a simple HTTP interface. The results are usually the URL of the output image. To get started, first you need to [get your API Key](https://picsart.io/accounts/login). Below you can find the sample codes to get started easily. Reference docs are given with more information about available parameters that can be adjusted.  ## Sample Run ``` curl -X POST \\ 'https://api.picsart.io/tools/1.0/removebg' \\ -H 'x-picsart-api-key: APIKEYHERE' \\ -F 'output_type=cutout' \\ -F 'image_url=https://cdn140.picsart.com/13902645939997000779.jpg' ```  ## Server The demo environment has been removed (https://api.picsart.io/tools/demo/). We recommend that you use the new production environment (https://api.picsart.io/tools/1.0/) instead. Please contact us if you find any issues.  ## API Key To try out our services you will need to  * [create an account](https://picsart.io/accounts/login), * create an app under [My Apps](https://picsart.io/my-apps/) * and get the API key required for authorization.  You can find more details about this process in the [Quickstart](https://picsart.io/api-quickstart).  ## Input File Input images of type JPG, PNG and WEBP are supported. Input image file size is 100 MB max. References to uploaded image files will be valid and can be used within 24 hours.  ## Output Formats You can request one of three formats, JPG, PNG, WEBP, via the format parameter. The result files will be available for use for 24 hours.  ## Rate Limit Users can process up to 100 requests per month during the demo run. When the rate limit is hit, the API will return 429 code with the info:   ```      {        \"fault\": {          \"faultstring\": \"Rate limit quota violation. Quota limit  exceeded. Identifier : _default\",           \"detail\": {             \"errorcode\": \"policies.ratelimit.QuotaViolation\"           }         }      }         ```  ## Authentication Authentication should be done via the provided API Key. API Key can be sent as a header:  ```  curl 'https://api.picsart.io/tools/1.0/effects' -H 'x-picsart-api-key: APIKEY'  ```  [Developer Guidelines](https://picsart.io/terms)
 *
 * OpenAPI spec version: 2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.42
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * MasksPreviewParameters Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MasksPreviewParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MasksPreviewParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'format' => 'string',
'blend' => 'string',
'mask' => 'string[]',
'opacity' => 'int',
'hue' => 'int',
'mask_flip' => 'string',
'preview_size' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'format' => null,
'blend' => null,
'mask' => null,
'opacity' => null,
'hue' => null,
'mask_flip' => null,
'preview_size' => null    ];

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
        'format' => 'format',
'blend' => 'blend',
'mask' => 'mask',
'opacity' => 'opacity',
'hue' => 'hue',
'mask_flip' => 'mask_flip',
'preview_size' => 'preview_size'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'format' => 'setFormat',
'blend' => 'setBlend',
'mask' => 'setMask',
'opacity' => 'setOpacity',
'hue' => 'setHue',
'mask_flip' => 'setMaskFlip',
'preview_size' => 'setPreviewSize'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'format' => 'getFormat',
'blend' => 'getBlend',
'mask' => 'getMask',
'opacity' => 'getOpacity',
'hue' => 'getHue',
'mask_flip' => 'getMaskFlip',
'preview_size' => 'getPreviewSize'    ];

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

    const FORMAT_JPG = 'JPG';
const FORMAT_PNG = 'PNG';
const FORMAT_WEBP = 'WEBP';
const BLEND_NORMAL = 'normal';
const BLEND_SCREEN = 'screen';
const BLEND_OVERLAY = 'overlay';
const BLEND_MULTIPLY = 'multiply';
const BLEND_DARKEN = 'darken';
const BLEND_LIGHTEN = 'lighten';
const BLEND_ADD = 'add';
const MASK_LACE1 = 'lace1';
const MASK_LACE2 = 'lace2';
const MASK_LACE3 = 'lace3';
const MASK_LACE4 = 'lace4';
const MASK_SHDW2 = 'shdw2';
const MASK_SHDW17 = 'shdw17';
const MASK_RPL3 = 'rpl3';
const MASK_RPL5 = 'rpl5';
const MASK_PRSM3 = 'prsm3';
const MASK_PRSM9 = 'prsm9';
const MASK_PRSM10 = 'prsm10';
const MASK_FLIP_LEFT = 'left';
const MASK_FLIP_RIGHT = 'right';
const MASK_FLIP_MIRROR_HORIZONTAL = 'mirror horizontal';
const MASK_FLIP_MIRROR_VERTICAL = 'mirror vertical';
const MASK_FLIP_TURNAROUND = 'turnaround';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_JPG,
self::FORMAT_PNG,
self::FORMAT_WEBP,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBlendAllowableValues()
    {
        return [
            self::BLEND_NORMAL,
self::BLEND_SCREEN,
self::BLEND_OVERLAY,
self::BLEND_MULTIPLY,
self::BLEND_DARKEN,
self::BLEND_LIGHTEN,
self::BLEND_ADD,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMaskAllowableValues()
    {
        return [
            self::MASK_LACE1,
self::MASK_LACE2,
self::MASK_LACE3,
self::MASK_LACE4,
self::MASK_SHDW2,
self::MASK_SHDW17,
self::MASK_RPL3,
self::MASK_RPL5,
self::MASK_PRSM3,
self::MASK_PRSM9,
self::MASK_PRSM10,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMaskFlipAllowableValues()
    {
        return [
            self::MASK_FLIP_LEFT,
self::MASK_FLIP_RIGHT,
self::MASK_FLIP_MIRROR_HORIZONTAL,
self::MASK_FLIP_MIRROR_VERTICAL,
self::MASK_FLIP_TURNAROUND,        ];
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
        $this->container['format'] = isset($data['format']) ? $data['format'] : 'JPG';
        $this->container['blend'] = isset($data['blend']) ? $data['blend'] : 'screen';
        $this->container['mask'] = isset($data['mask']) ? $data['mask'] : null;
        $this->container['opacity'] = isset($data['opacity']) ? $data['opacity'] : 100;
        $this->container['hue'] = isset($data['hue']) ? $data['hue'] : 0;
        $this->container['mask_flip'] = isset($data['mask_flip']) ? $data['mask_flip'] : null;
        $this->container['preview_size'] = isset($data['preview_size']) ? $data['preview_size'] : 120;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFormatAllowableValues();
        if (!is_null($this->container['format']) && !in_array($this->container['format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'format', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBlendAllowableValues();
        if (!is_null($this->container['blend']) && !in_array($this->container['blend'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'blend', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['mask'] === null) {
            $invalidProperties[] = "'mask' can't be null";
        }
        $allowedValues = $this->getMaskFlipAllowableValues();
        if (!is_null($this->container['mask_flip']) && !in_array($this->container['mask_flip'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'mask_flip', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string $format Optionally select one of the image formats (JPG is chosen if left blank). Options are as follows:   * JPG   * PNG   * WEBP
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $allowedValues = $this->getFormatAllowableValues();
        if (!is_null($format) && !in_array($format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'format', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets blend
     *
     * @return string
     */
    public function getBlend()
    {
        return $this->container['blend'];
    }

    /**
     * Sets blend
     *
     * @param string $blend Select one of the appearance types from the dropdown list (it will be _screen_ if left blank). The options are as follows.   * normal   * screen   * overlay   * multiply   * darken   * lighten   * add
     *
     * @return $this
     */
    public function setBlend($blend)
    {
        $allowedValues = $this->getBlendAllowableValues();
        if (!is_null($blend) && !in_array($blend, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'blend', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['blend'] = $blend;

        return $this;
    }

    /**
     * Gets mask
     *
     * @return string[]
     */
    public function getMask()
    {
        return $this->container['mask'];
    }

    /**
     * Sets mask
     *
     * @param string[] $mask Select up to 10 mask types from the list by holding down Ctrl. The options are as follows   * lace1   * lace4   * shdw2   * shdw17   * fold5   * fold9   * rpl3   * rpl5   * prsm3   * prsm9   * prsm10
     *
     * @return $this
     */
    public function setMask($mask)
    {
        $allowedValues = $this->getMaskAllowableValues();
        if (array_diff($mask, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'mask', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mask'] = $mask;

        return $this;
    }

    /**
     * Gets opacity
     *
     * @return int
     */
    public function getOpacity()
    {
        return $this->container['opacity'];
    }

    /**
     * Sets opacity
     *
     * @param int $opacity Enter an integer value from 0 to +100. The larger the number, the greater the opacity.
     *
     * @return $this
     */
    public function setOpacity($opacity)
    {
        $this->container['opacity'] = $opacity;

        return $this;
    }

    /**
     * Gets hue
     *
     * @return int
     */
    public function getHue()
    {
        return $this->container['hue'];
    }

    /**
     * Sets hue
     *
     * @param int $hue Enter an integer value from -180 to +180.
     *
     * @return $this
     */
    public function setHue($hue)
    {
        $this->container['hue'] = $hue;

        return $this;
    }

    /**
     * Gets mask_flip
     *
     * @return string
     */
    public function getMaskFlip()
    {
        return $this->container['mask_flip'];
    }

    /**
     * Sets mask_flip
     *
     * @param string $mask_flip Choose a mask flip option. The choices are as follows.   * left   * right   * mirror horizontal   * mirror vertical   * turnaround
     *
     * @return $this
     */
    public function setMaskFlip($mask_flip)
    {
        $allowedValues = $this->getMaskFlipAllowableValues();
        if (!is_null($mask_flip) && !in_array($mask_flip, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'mask_flip', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mask_flip'] = $mask_flip;

        return $this;
    }

    /**
     * Gets preview_size
     *
     * @return int
     */
    public function getPreviewSize()
    {
        return $this->container['preview_size'];
    }

    /**
     * Sets preview_size
     *
     * @param int $preview_size Enter the max size for the width or height of the preview image. The max value is 240px. If left blank it's 120px.
     *
     * @return $this
     */
    public function setPreviewSize($preview_size)
    {
        $this->container['preview_size'] = $preview_size;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
