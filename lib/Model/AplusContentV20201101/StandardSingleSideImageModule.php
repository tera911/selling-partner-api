<?php
/**
 * StandardSingleSideImageModule
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for A+ Content Management
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * The version of the OpenAPI document: 2020-11-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\AplusContentV20201101;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * StandardSingleSideImageModule Class Doc Comment
 *
 * @category Class
 * @description A standard headline and body text with an image on the side.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class StandardSingleSideImageModule extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StandardSingleSideImageModule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'image_position_type' => '\SellingPartnerApi\Model\AplusContentV20201101\PositionType',
        'block' => '\SellingPartnerApi\Model\AplusContentV20201101\StandardImageTextBlock'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'image_position_type' => null,
        'block' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'image_position_type' => 'imagePositionType',
        'block' => 'block'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'image_position_type' => 'setImagePositionType',
        'block' => 'setBlock'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'image_position_type' => 'getImagePositionType',
        'block' => 'getBlock'
    ];


    
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
        $this->container['image_position_type'] = $data['image_position_type'] ?? null;
        $this->container['block'] = $data['block'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['image_position_type'] === null) {
            $invalidProperties[] = "'image_position_type' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets image_position_type
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\PositionType
     */
    public function getImagePositionType()
    {
        return $this->container['image_position_type'];
    }

    /**
     * Sets image_position_type
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\PositionType $image_position_type image_position_type
     *
     * @return self
     */
    public function setImagePositionType($image_position_type)
    {
        $this->container['image_position_type'] = $image_position_type;

        return $this;
    }
    /**
     * Gets block
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\StandardImageTextBlock|null
     */
    public function getBlock()
    {
        return $this->container['block'];
    }

    /**
     * Sets block
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\StandardImageTextBlock|null $block block
     *
     * @return self
     */
    public function setBlock($block)
    {
        $this->container['block'] = $block;

        return $this;
    }
}


