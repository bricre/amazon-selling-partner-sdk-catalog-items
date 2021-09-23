<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class IdentifierType extends AbstractModel
{
    /**
     * Indicates the item is identified by MarketPlaceId and ASIN.
     *
     * @var \Amz\CatalogItems\Model\ASINIdentifier
     */
    public $MarketplaceASIN = null;

    /**
     * Indicates the item is identified by MarketPlaceId, SellerId, and SellerSKU.
     *
     * @var \Amz\CatalogItems\Model\SellerSKUIdentifier
     */
    public $SKUIdentifier = null;
}
