<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Product type associated with the Amazon catalog item for the indicated Amazon
 * marketplace.
 */
class ItemProductTypeByMarketplace extends AbstractModel
{
    /**
     * Amazon marketplace identifier.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * Name of the product type associated with the Amazon catalog item.
     *
     * @var string
     */
    public $productType = null;
}
