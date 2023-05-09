<?php
/**
 * EditBody
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
use \Swagger\Client\ObjectSerializer;

/**
 * EditBody Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EditBody extends ImageParameters 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'edit_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'format' => 'string',
'mode' => 'string',
'size' => 'int',
'width' => 'int',
'height' => 'int',
'flip' => 'string',
'rotate' => 'float',
'perspective_horizontal' => 'int',
'perspective_vertical' => 'int',
'quality' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'format' => null,
'mode' => null,
'size' => null,
'width' => null,
'height' => null,
'flip' => null,
'rotate' => 'float',
'perspective_horizontal' => null,
'perspective_vertical' => null,
'quality' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'format' => 'format',
'mode' => 'mode',
'size' => 'size',
'width' => 'width',
'height' => 'height',
'flip' => 'flip',
'rotate' => 'rotate',
'perspective_horizontal' => 'perspective_horizontal',
'perspective_vertical' => 'perspective_vertical',
'quality' => 'quality'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'format' => 'setFormat',
'mode' => 'setMode',
'size' => 'setSize',
'width' => 'setWidth',
'height' => 'setHeight',
'flip' => 'setFlip',
'rotate' => 'setRotate',
'perspective_horizontal' => 'setPerspectiveHorizontal',
'perspective_vertical' => 'setPerspectiveVertical',
'quality' => 'setQuality'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'format' => 'getFormat',
'mode' => 'getMode',
'size' => 'getSize',
'width' => 'getWidth',
'height' => 'getHeight',
'flip' => 'getFlip',
'rotate' => 'getRotate',
'perspective_horizontal' => 'getPerspectiveHorizontal',
'perspective_vertical' => 'getPerspectiveVertical',
'quality' => 'getQuality'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
const MODE_RESIZE = 'resize';
const MODE_CROP = 'crop';
const FLIP_HORIZONTAL = 'horizontal';
const FLIP_VERTICAL = 'vertical';

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
    public function getModeAllowableValues()
    {
        return [
            self::MODE_RESIZE,
self::MODE_CROP,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFlipAllowableValues()
    {
        return [
            self::FLIP_HORIZONTAL,
self::FLIP_VERTICAL,        ];
    }


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['format'] = isset($data['format']) ? $data['format'] : 'JPG';
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['flip'] = isset($data['flip']) ? $data['flip'] : null;
        $this->container['rotate'] = isset($data['rotate']) ? $data['rotate'] : 0;
        $this->container['perspective_horizontal'] = isset($data['perspective_horizontal']) ? $data['perspective_horizontal'] : 0;
        $this->container['perspective_vertical'] = isset($data['perspective_vertical']) ? $data['perspective_vertical'] : 0;
        $this->container['quality'] = isset($data['quality']) ? $data['quality'] : 90;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getFormatAllowableValues();
        if (!is_null($this->container['format']) && !in_array($this->container['format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'format', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getModeAllowableValues();
        if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFlipAllowableValues();
        if (!is_null($this->container['flip']) && !in_array($this->container['flip'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'flip', must be one of '%s'",
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
     * Gets mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string $mode For *crop* mode, the outcome image will be center-cropped with the given size (width, height). For the *resize* mode, the smallest size will be fitted to preserve the original proportion of the image. When the outcome size is not provided with width and height, no cropping or resizing will be applied (see alternative options such as rotate, flip and perspective).
     *
     * @return $this
     */
    public function setMode($mode)
    {
        $allowedValues = $this->getModeAllowableValues();
        if (!is_null($mode) && !in_array($mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int $size When defined, this parameter overrides and applies the value for both width and height.
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int $width Width of outcome image. If the provided width is larger than the original width of the file, the original size of the image will be selected. When crop size is defined, but the x,y starting position is not provided, the crop will be a center-crop (i.e., equally cutting from each side).
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int $height Height of outcome image. If the provided height is larger than the original width of the file, the original size of the image will be selected. When crop size is defined, but the x,y starting position is not provided, the crop will be a center-crop (i.e, equally cutting from each side).
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets flip
     *
     * @return string
     */
    public function getFlip()
    {
        return $this->container['flip'];
    }

    /**
     * Sets flip
     *
     * @param string $flip Choose a way to flip the image.
     *
     * @return $this
     */
    public function setFlip($flip)
    {
        $allowedValues = $this->getFlipAllowableValues();
        if (!is_null($flip) && !in_array($flip, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'flip', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['flip'] = $flip;

        return $this;
    }

    /**
     * Gets rotate
     *
     * @return float
     */
    public function getRotate()
    {
        return $this->container['rotate'];
    }

    /**
     * Sets rotate
     *
     * @param float $rotate Enter a float value to rotate the image from -180 to +180. Default is 0.
     *
     * @return $this
     */
    public function setRotate($rotate)
    {
        $this->container['rotate'] = $rotate;

        return $this;
    }

    /**
     * Gets perspective_horizontal
     *
     * @return int
     */
    public function getPerspectiveHorizontal()
    {
        return $this->container['perspective_horizontal'];
    }

    /**
     * Sets perspective_horizontal
     *
     * @param int $perspective_horizontal The horizontal perspective after edits.
     *
     * @return $this
     */
    public function setPerspectiveHorizontal($perspective_horizontal)
    {
        $this->container['perspective_horizontal'] = $perspective_horizontal;

        return $this;
    }

    /**
     * Gets perspective_vertical
     *
     * @return int
     */
    public function getPerspectiveVertical()
    {
        return $this->container['perspective_vertical'];
    }

    /**
     * Sets perspective_vertical
     *
     * @param int $perspective_vertical The vertical perspective after edits.
     *
     * @return $this
     */
    public function setPerspectiveVertical($perspective_vertical)
    {
        $this->container['perspective_vertical'] = $perspective_vertical;

        return $this;
    }

    /**
     * Gets quality
     *
     * @return int
     */
    public function getQuality()
    {
        return $this->container['quality'];
    }

    /**
     * Sets quality
     *
     * @param int $quality This refers to the level of accuracy of the image processing. The greater the quality (i.e., the larger the number), the larger the image file size. The default value is 90, which is a good compromise between quality and file size.
     *
     * @return $this
     */
    public function setQuality($quality)
    {
        $this->container['quality'] = $quality;

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
