<?php
/**
 * TaxWithheldComponent
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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

namespace SellingPartnerApi\Model\FinancesV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * TaxWithheldComponent Class Doc Comment
 *
 * @category Class
 * @description Information about the taxes withheld.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class TaxWithheldComponent extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TaxWithheldComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tax_collection_model' => 'string',
        'taxes_withheld' => '\SellingPartnerApi\Model\FinancesV0\ChargeComponent[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tax_collection_model' => null,
        'taxes_withheld' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'tax_collection_model' => 'TaxCollectionModel',
        'taxes_withheld' => 'TaxesWithheld'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'tax_collection_model' => 'setTaxCollectionModel',
        'taxes_withheld' => 'setTaxesWithheld'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tax_collection_model' => 'getTaxCollectionModel',
        'taxes_withheld' => 'getTaxesWithheld'
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
        $this->container['tax_collection_model'] = $data['tax_collection_model'] ?? null;
        $this->container['taxes_withheld'] = $data['taxes_withheld'] ?? null;
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
     * Gets tax_collection_model
     *
     * @return string|null
     */
    public function getTaxCollectionModel()
    {
        return $this->container['tax_collection_model'];
    }

    /**
     * Sets tax_collection_model
     *
     * @param string|null $tax_collection_model The tax collection model applied to the item. Possible values: * MarketplaceFacilitator - Tax is withheld and remitted to the taxing authority by Amazon on behalf of the seller. * Standard - Tax is paid to the seller and not remitted to the taxing authority by Amazon.
     *
     * @return self
     */
    public function setTaxCollectionModel($tax_collection_model)
    {
        $this->container['tax_collection_model'] = $tax_collection_model;

        return $this;
    }
    /**
     * Gets taxes_withheld
     *
     * @return \SellingPartnerApi\Model\FinancesV0\ChargeComponent[]|null
     */
    public function getTaxesWithheld()
    {
        return $this->container['taxes_withheld'];
    }

    /**
     * Sets taxes_withheld
     *
     * @param \SellingPartnerApi\Model\FinancesV0\ChargeComponent[]|null $taxes_withheld A list of charge information on the seller's account.
     *
     * @return self
     */
    public function setTaxesWithheld($taxes_withheld)
    {
        $this->container['taxes_withheld'] = $taxes_withheld;

        return $this;
    }
}


