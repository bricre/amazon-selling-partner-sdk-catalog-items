<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Summary details of an Amazon catalog item for the indicated Amazon marketplace.
 */
class ItemSummaryByMarketplace extends AbstractModel
{
    /**
     * Amazon marketplace identifier.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * Name of the brand associated with an Amazon catalog item.
     *
     * @var string
     */
    public $brandName = null;

    /**
     * Identifier of the browse node associated with an Amazon catalog item.
     *
     * @var string
     */
    public $browseNode = null;

    /**
     * Name of the color associated with an Amazon catalog item.
     *
     * @var string
     */
    public $colorName = null;

    /**
     * Name, or title, associated with an Amazon catalog item.
     *
     * @var string
     */
    public $itemName = null;

    /**
     * Name of the manufacturer associated with an Amazon catalog item.
     *
     * @var string
     */
    public $manufacturer = null;

    /**
     * Model number associated with an Amazon catalog item.
     *
     * @var string
     */
    public $modelNumber = null;

    /**
     * Name of the size associated with an Amazon catalog item.
     *
     * @var string
     */
    public $sizeName = null;

    /**
     * Name of the style associated with an Amazon catalog item.
     *
     * @var string
     */
    public $styleName = null;
}
