<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel;

class SalesRankType extends AbstractModel
{
    /**
     * Identifies the item category from which the sales rank is taken.
     *
     * @var string
     */
    public $ProductCategoryId = null;

    /**
     * The sales rank of the item within the item category.
     *
     * @var int
     */
    public $Rank = null;
}
