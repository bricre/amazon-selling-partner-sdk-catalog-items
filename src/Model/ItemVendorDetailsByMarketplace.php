<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Vendor details associated with an Amazon catalog item for the indicated Amazon
 * marketplace.
 */
class ItemVendorDetailsByMarketplace extends AbstractModel
{
    /**
     * Amazon marketplace identifier.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * Brand code associated with an Amazon catalog item.
     *
     * @var string
     */
    public $brandCode = null;

    /**
     * Product category associated with an Amazon catalog item.
     *
     * @var string
     */
    public $categoryCode = null;

    /**
     * Manufacturer code associated with an Amazon catalog item.
     *
     * @var string
     */
    public $manufacturerCode = null;

    /**
     * Parent vendor code of the manufacturer code.
     *
     * @var string
     */
    public $manufacturerCodeParent = null;

    /**
     * Product group associated with an Amazon catalog item.
     *
     * @var string
     */
    public $productGroup = null;

    /**
     * Replenishment category associated with an Amazon catalog item.
     *
     * @var string
     */
    public $replenishmentCategory = null;

    /**
     * Product subcategory associated with an Amazon catalog item.
     *
     * @var string
     */
    public $subcategoryCode = null;
}
