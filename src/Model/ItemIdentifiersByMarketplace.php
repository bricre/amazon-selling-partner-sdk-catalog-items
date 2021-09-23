<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Identifiers associated with the item in the Amazon catalog for the indicated
 * Amazon marketplace.
 */
class ItemIdentifiersByMarketplace extends AbstractModel
{
    /**
     * Amazon marketplace identifier.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * Identifiers associated with the item in the Amazon catalog for the indicated
     * Amazon marketplace.
     *
     * @var \Amz\CatalogItems\Model\ItemIdentifier[]
     */
    public $identifiers = null;
}
