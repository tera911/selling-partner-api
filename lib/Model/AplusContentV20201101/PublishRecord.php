<?php
/**
 * PublishRecord
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
 * PublishRecord Class Doc Comment
 *
 * @category Class
 * @description The full context for an A+ Content publishing event.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PublishRecord extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PublishRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'marketplace_id' => 'string',
        'locale' => 'string',
        'asin' => 'string',
        'content_type' => '\SellingPartnerApi\Model\AplusContentV20201101\ContentType',
        'content_sub_type' => 'string',
        'content_reference_key' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'marketplace_id' => null,
        'locale' => null,
        'asin' => null,
        'content_type' => null,
        'content_sub_type' => null,
        'content_reference_key' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'marketplace_id' => 'marketplaceId',
        'locale' => 'locale',
        'asin' => 'asin',
        'content_type' => 'contentType',
        'content_sub_type' => 'contentSubType',
        'content_reference_key' => 'contentReferenceKey'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'marketplace_id' => 'setMarketplaceId',
        'locale' => 'setLocale',
        'asin' => 'setAsin',
        'content_type' => 'setContentType',
        'content_sub_type' => 'setContentSubType',
        'content_reference_key' => 'setContentReferenceKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'locale' => 'getLocale',
        'asin' => 'getAsin',
        'content_type' => 'getContentType',
        'content_sub_type' => 'getContentSubType',
        'content_reference_key' => 'getContentReferenceKey'
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
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['locale'] = $data['locale'] ?? null;
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['content_type'] = $data['content_type'] ?? null;
        $this->container['content_sub_type'] = $data['content_sub_type'] ?? null;
        $this->container['content_reference_key'] = $data['content_reference_key'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['marketplace_id'] === null) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }
        if ((mb_strlen($this->container['marketplace_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'marketplace_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['locale'] === null) {
            $invalidProperties[] = "'locale' can't be null";
        }
        if ((mb_strlen($this->container['locale']) < 5)) {
            $invalidProperties[] = "invalid value for 'locale', the character length must be bigger than or equal to 5.";
        }

        if ($this->container['asin'] === null) {
            $invalidProperties[] = "'asin' can't be null";
        }
        if ($this->container['content_type'] === null) {
            $invalidProperties[] = "'content_type' can't be null";
        }
        if ($this->container['content_reference_key'] === null) {
            $invalidProperties[] = "'content_reference_key' can't be null";
        }
        if ((mb_strlen($this->container['content_reference_key']) < 1)) {
            $invalidProperties[] = "invalid value for 'content_reference_key', the character length must be bigger than or equal to 1.";
        }

        return $invalidProperties;
    }


    /**
     * Gets marketplace_id
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string $marketplace_id The identifier for the marketplace where the A+ Content is published.
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id)
    {

        if ((mb_strlen($marketplace_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $marketplace_id when calling PublishRecord., must be bigger than or equal to 1.');
        }

        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }
    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale The IETF language tag. This only supports the primary language subtag with one secondary language subtag. The secondary language subtag is almost always a regional designation. This does not support additional subtags beyond the primary and secondary subtags. **Pattern:** ^[a-z]{2,}-[A-Z0-9]{2,}$
     *
     * @return self
     */
    public function setLocale($locale)
    {

        if ((mb_strlen($locale) < 5)) {
            throw new \InvalidArgumentException('invalid length for $locale when calling PublishRecord., must be bigger than or equal to 5.');
        }

        $this->container['locale'] = $locale;

        return $this;
    }
    /**
     * Gets asin
     *
     * @return string
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string $asin The Amazon Standard Identification Number (ASIN).
     *
     * @return self
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }
    /**
     * Gets content_type
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\ContentType
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\ContentType $content_type content_type
     *
     * @return self
     */
    public function setContentType($content_type)
    {
        $this->container['content_type'] = $content_type;

        return $this;
    }
    /**
     * Gets content_sub_type
     *
     * @return string|null
     */
    public function getContentSubType()
    {
        return $this->container['content_sub_type'];
    }

    /**
     * Sets content_sub_type
     *
     * @param string|null $content_sub_type The A+ Content document subtype. This represents a special-purpose type of an A+ Content document. Not every A+ Content document type will have a subtype, and subtypes may change at any time.
     *
     * @return self
     */
    public function setContentSubType($content_sub_type)
    {
        $this->container['content_sub_type'] = $content_sub_type;

        return $this;
    }
    /**
     * Gets content_reference_key
     *
     * @return string
     */
    public function getContentReferenceKey()
    {
        return $this->container['content_reference_key'];
    }

    /**
     * Sets content_reference_key
     *
     * @param string $content_reference_key A unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ content identifier.
     *
     * @return self
     */
    public function setContentReferenceKey($content_reference_key)
    {

        if ((mb_strlen($content_reference_key) < 1)) {
            throw new \InvalidArgumentException('invalid length for $content_reference_key when calling PublishRecord., must be bigger than or equal to 1.');
        }

        $this->container['content_reference_key'] = $content_reference_key;

        return $this;
    }
}


