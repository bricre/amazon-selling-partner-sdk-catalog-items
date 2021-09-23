<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Images for an item in the Amazon catalog for the indicated Amazon marketplace.
 */
class ItemImagesByMarketplace extends AbstractModel
{
    /**
     * Amazon marketplace identifier.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * Images for an item in the Amazon catalog for the indicated Amazon marketplace.
     *
     * @var \Amz\CatalogItems\Model\ItemImage[]
     */
    public $images = null;
}
