<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An item in the Amazon catalog.
 */
class Item extends AbstractModel
{
    /**
     * @var \Amz\CatalogItems\Model\ItemAsin
     */
    public $asin = null;

    /**
     * @var \Amz\CatalogItems\Model\ItemAttributes
     */
    public $attributes = null;

    /**
     * @var \Amz\CatalogItems\Model\ItemIdentifiers
     */
    public $identifiers = null;

    /**
     * @var \Amz\CatalogItems\Model\ItemImages
     */
    public $images = null;

    /**
     * @var \Amz\CatalogItems\Model\ItemProductTypes
     */
    public $productTypes = null;

    /**
     * @var \Amz\CatalogItems\Model\ItemSalesRanks
     */
    public $salesRanks = null;

    /**
     * @var \Amz\CatalogItems\Model\ItemSummaries
     */
    public $summaries = null;

    /**
     * @var \Amz\CatalogItems\Model\ItemVariations
     */
    public $variations = null;

    /**
     * @var \Amz\CatalogItems\Model\ItemVendorDetails
     */
    public $vendorDetails = null;
}
