<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel;

class ASINIdentifier extends AbstractModel
{
    /**
     * A marketplace identifier.
     *
     * @var string
     */
    public $MarketplaceId = null;

    /**
     * The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @var string
     */
    public $ASIN = null;
}
