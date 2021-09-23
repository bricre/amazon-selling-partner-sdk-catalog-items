<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Variation details for the Amazon catalog item for the indicated Amazon
 * marketplace.
 */
class ItemVariationsByMarketplace extends AbstractModel
{
    /**
     * Amazon marketplace identifier.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * Identifiers (ASINs) of the related items.
     *
     * @var string[]
     */
    public $asins = null;

    /**
     * Type of variation relationship of the Amazon catalog item in the request to the
     * related item(s): "PARENT" or "CHILD".
     *
     * @var string
     */
    public $variationType = null;
}
