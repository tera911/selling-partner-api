<?php
/**
 * ScheduledDeliveryInfo
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\FbaOutboundV20200701;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * ScheduledDeliveryInfo Class Doc Comment
 *
 * @category Class
 * @description Delivery information for a scheduled delivery.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ScheduledDeliveryInfo extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ScheduledDeliveryInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'delivery_time_zone' => 'string',
        'delivery_windows' => '\SellingPartnerApi\Model\FbaOutboundV20200701\DeliveryWindow[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'delivery_time_zone' => null,
        'delivery_windows' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'delivery_time_zone' => 'deliveryTimeZone',
        'delivery_windows' => 'deliveryWindows'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'delivery_time_zone' => 'setDeliveryTimeZone',
        'delivery_windows' => 'setDeliveryWindows'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'delivery_time_zone' => 'getDeliveryTimeZone',
        'delivery_windows' => 'getDeliveryWindows'
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
        $this->container['delivery_time_zone'] = $data['delivery_time_zone'] ?? null;
        $this->container['delivery_windows'] = $data['delivery_windows'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['delivery_time_zone'] === null) {
            $invalidProperties[] = "'delivery_time_zone' can't be null";
        }
        if ($this->container['delivery_windows'] === null) {
            $invalidProperties[] = "'delivery_windows' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets delivery_time_zone
     *
     * @return string
     */
    public function getDeliveryTimeZone()
    {
        return $this->container['delivery_time_zone'];
    }

    /**
     * Sets delivery_time_zone
     *
     * @param string $delivery_time_zone The time zone of the destination address for the fulfillment order preview. Must be an IANA time zone name. Example: Asia/Tokyo.
     *
     * @return self
     */
    public function setDeliveryTimeZone($delivery_time_zone)
    {
        $this->container['delivery_time_zone'] = $delivery_time_zone;

        return $this;
    }
    /**
     * Gets delivery_windows
     *
     * @return \SellingPartnerApi\Model\FbaOutboundV20200701\DeliveryWindow[]
     */
    public function getDeliveryWindows()
    {
        return $this->container['delivery_windows'];
    }

    /**
     * Sets delivery_windows
     *
     * @param \SellingPartnerApi\Model\FbaOutboundV20200701\DeliveryWindow[] $delivery_windows An array of delivery windows.
     *
     * @return self
     */
    public function setDeliveryWindows($delivery_windows)
    {
        $this->container['delivery_windows'] = $delivery_windows;

        return $this;
    }
}


