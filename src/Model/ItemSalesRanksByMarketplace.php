<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Sales ranks of an Amazon catalog item for the indicated Amazon marketplace.
 */
class ItemSalesRanksByMarketplace extends AbstractModel
{
    /**
     * Amazon marketplace identifier.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * Sales ranks of an Amazon catalog item for an Amazon marketplace.
     *
     * @var \Amz\CatalogItems\Model\ItemSalesRank[]
     */
    public $ranks = null;
}
