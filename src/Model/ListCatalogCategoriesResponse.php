<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class ListCatalogCategoriesResponse extends AbstractModel
{
    /**
     * The payload for the listCatalogCategories operation.
     *
     * @var \Amz\CatalogItems\Model\ListOfCategories
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the listCatalogCategories
     * operation.
     *
     * @var \Amz\CatalogItems\Model\ErrorList
     */
    public $errors = null;
}
