<?php
/**
 * ListingsItemSubmissionResponse
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Listings Items
 *
 * The Selling Partner API for Listings Items (Listings Items API) provides programmatic access to selling partner listings on Amazon. Use this API in collaboration with the Selling Partner API for Product Type Definitions, which you use to retrieve the information about Amazon product types needed to use the Listings Items API. For more information, see the [Listings Items API Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/listings-items-api-v2021-08-01-use-case-guide).
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

namespace SellingPartnerApi\Model\ListingsV20210801;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * ListingsItemSubmissionResponse Class Doc Comment
 *
 * @category Class
 * @description Response containing the results of a submission to the Selling Partner API for Listings Items.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ListingsItemSubmissionResponse extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListingsItemSubmissionResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sku' => 'string',
        'status' => 'string',
        'submission_id' => 'string',
        'issues' => '\SellingPartnerApi\Model\ListingsV20210801\Issue[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sku' => null,
        'status' => null,
        'submission_id' => null,
        'issues' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'headers' => 'headers',
        'sku' => 'sku',
        'status' => 'status',
        'submission_id' => 'submissionId',
        'issues' => 'issues'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'headers' => 'setHeaders',
        'sku' => 'setSku',
        'status' => 'setStatus',
        'submission_id' => 'setSubmissionId',
        'issues' => 'setIssues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'headers' => 'getHeaders',
        'sku' => 'getSku',
        'status' => 'getStatus',
        'submission_id' => 'getSubmissionId',
        'issues' => 'getIssues'
    ];



    const STATUS_ACCEPTED = 'ACCEPTED';
    const STATUS_INVALID = 'INVALID';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        $baseVals = [
            self::STATUS_ACCEPTED,
            self::STATUS_INVALID,
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
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['submission_id'] = $data['submission_id'] ?? null;
        $this->container['issues'] = $data['issues'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (
            !is_null($this->container['status']) &&
            !in_array(strtoupper($this->container['status']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['submission_id'] === null) {
            $invalidProperties[] = "'submission_id' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Gets API response headers
     *
     * @return array[string]
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets API response headers (only relevant to response models)
     *
     * @param array[string => string] $headers Associative array of response headers.
     *
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;
        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku A selling partner provided identifier for an Amazon listing.
     *
     * @return self
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }
    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The status of the listings item submission.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array(strtoupper($status), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }
    /**
     * Gets submission_id
     *
     * @return string
     */
    public function getSubmissionId()
    {
        return $this->container['submission_id'];
    }

    /**
     * Sets submission_id
     *
     * @param string $submission_id The unique identifier of the listings item submission.
     *
     * @return self
     */
    public function setSubmissionId($submission_id)
    {
        $this->container['submission_id'] = $submission_id;

        return $this;
    }
    /**
     * Gets issues
     *
     * @return \SellingPartnerApi\Model\ListingsV20210801\Issue[]|null
     */
    public function getIssues()
    {
        return $this->container['issues'];
    }

    /**
     * Sets issues
     *
     * @param \SellingPartnerApi\Model\ListingsV20210801\Issue[]|null $issues Listings item issues related to the listings item submission.
     *
     * @return self
     */
    public function setIssues($issues)
    {
        $this->container['issues'] = $issues;

        return $this;
    }
}


