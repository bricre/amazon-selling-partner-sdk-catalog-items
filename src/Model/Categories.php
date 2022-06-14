<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel;

class Categories extends AbstractModel
{
    /**
     * The identifier for the product category (or browse node).
     *
     * @var string
     */
    public $ProductCategoryId = null;

    /**
     * The name of the product category (or browse node).
     *
     * @var string
     */
    public $ProductCategoryName = null;

    /**
     * The parent product category.
     *
     * @var object
     */
    public $parent = null;
}
