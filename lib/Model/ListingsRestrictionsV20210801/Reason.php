<?php
/**
 * Reason
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Listings Restrictions
 *
 * The Selling Partner API for Listings Restrictions provides programmatic access to restrictions on Amazon catalog listings. For more information, see the [Listings Restrictions API Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/listings-restrictions-api-v2021-08-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2021-08-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ListingsRestrictionsV20210801;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * Reason Class Doc Comment
 *
 * @category Class
 * @description A reason for the restriction, including path forward links that may allow Selling Partners to remove the restriction, if available.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Reason extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Reason';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'message' => 'string',
        'reason_code' => 'string',
        'links' => '\SellingPartnerApi\Model\ListingsRestrictionsV20210801\Link[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'message' => null,
        'reason_code' => null,
        'links' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'message' => 'message',
        'reason_code' => 'reasonCode',
        'links' => 'links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'message' => 'setMessage',
        'reason_code' => 'setReasonCode',
        'links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'message' => 'getMessage',
        'reason_code' => 'getReasonCode',
        'links' => 'getLinks'
    ];



    const REASON_CODE_APPROVAL_REQUIRED = 'APPROVAL_REQUIRED';
    const REASON_CODE_ASIN_NOT_FOUND = 'ASIN_NOT_FOUND';
    const REASON_CODE_NOT_ELIGIBLE = 'NOT_ELIGIBLE';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReasonCodeAllowableValues()
    {
        $baseVals = [
            self::REASON_CODE_APPROVAL_REQUIRED,
            self::REASON_CODE_ASIN_NOT_FOUND,
            self::REASON_CODE_NOT_ELIGIBLE,
        ];

        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        return array_map(function ($val) { return strtoupper($val); }, $baseVals);
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
        $this->container['message'] = $data['message'] ?? null;
        $this->container['reason_code'] = $data['reason_code'] ?? null;
        $this->container['links'] = $data['links'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
        $allowedValues = $this->getReasonCodeAllowableValues();
        if (
            !is_null($this->container['reason_code']) &&
            !in_array(strtoupper($this->container['reason_code']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'reason_code', must be one of '%s'",
                $this->container['reason_code'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }


    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message A message describing the reason for the restriction.
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }
    /**
     * Gets reason_code
     *
     * @return string|null
     */
    public function getReasonCode()
    {
        return $this->container['reason_code'];
    }

    /**
     * Sets reason_code
     *
     * @param string|null $reason_code A code indicating why the listing is restricted.
     *
     * @return self
     */
    public function setReasonCode($reason_code)
    {
        $allowedValues = $this->getReasonCodeAllowableValues();
        if (!is_null($reason_code) &&!in_array(strtoupper($reason_code), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'reason_code', must be one of '%s'",
                    $reason_code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reason_code'] = $reason_code;

        return $this;
    }
    /**
     * Gets links
     *
     * @return \SellingPartnerApi\Model\ListingsRestrictionsV20210801\Link[]|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \SellingPartnerApi\Model\ListingsRestrictionsV20210801\Link[]|null $links A list of path forward links that may allow Selling Partners to remove the restriction.
     *
     * @return self
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }
}


