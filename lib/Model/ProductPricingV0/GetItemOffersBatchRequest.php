<?php
/**
 * GetItemOffersBatchRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ProductPricingV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * GetItemOffersBatchRequest Class Doc Comment
 *
 * @category Class
 * @description The request associated with the `getItemOffersBatch` API call.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GetItemOffersBatchRequest extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetItemOffersBatchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'requests' => '\SellingPartnerApi\Model\ProductPricingV0\ItemOffersRequest[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'requests' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'requests' => 'requests'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'requests' => 'setRequests'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'requests' => 'getRequests'
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
        $this->container['requests'] = $data['requests'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['requests']) && (count($this->container['requests']) > 20)) {
            $invalidProperties[] = "invalid value for 'requests', number of items must be less than or equal to 20.";
        }

        if (!is_null($this->container['requests']) && (count($this->container['requests']) < 1)) {
            $invalidProperties[] = "invalid value for 'requests', number of items must be greater than or equal to 1.";
        }

        return $invalidProperties;
    }


    /**
     * Gets requests
     *
     * @return \SellingPartnerApi\Model\ProductPricingV0\ItemOffersRequest[]|null
     */
    public function getRequests()
    {
        return $this->container['requests'];
    }

    /**
     * Sets requests
     *
     * @param \SellingPartnerApi\Model\ProductPricingV0\ItemOffersRequest[]|null $requests A list of `getListingOffers` batched requests to run.
     *
     * @return self
     */
    public function setRequests($requests)
    {

        if (!is_null($requests) && (count($requests) > 20)) {
            throw new \InvalidArgumentException('invalid value for $requests when calling GetItemOffersBatchRequest., number of items must be less than or equal to 20.');
        }
        if (!is_null($requests) && (count($requests) < 1)) {
            throw new \InvalidArgumentException('invalid length for $requests when calling GetItemOffersBatchRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['requests'] = $requests;

        return $this;
    }
}


