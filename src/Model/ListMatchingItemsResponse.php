<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class ListMatchingItemsResponse extends AbstractModel
{
    /**
     * @var \Amz\CatalogItems\Model\ItemList
     */
    public $Items = null;
}
