<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Sales rank of an Amazon catalog item.
 */
class ItemSalesRank extends AbstractModel
{
    /**
     * Title, or name, of the sales rank.
     *
     * @var string
     */
    public $title = null;

    /**
     * Corresponding Amazon retail website link, or URL, for the sales rank.
     *
     * @var string
     */
    public $link = null;

    /**
     * Sales rank value.
     *
     * @var int
     */
    public $rank = null;
}
