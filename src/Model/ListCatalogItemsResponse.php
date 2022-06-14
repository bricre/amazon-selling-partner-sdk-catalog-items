<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel;

class ListCatalogItemsResponse extends AbstractModel
{
    /**
     * The payload for the listCatalogItems operation.
     *
     * @var \Amz\CatalogItems\Model\ListMatchingItemsResponse
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the listCatalogItems operation.
     *
     * @var \Amz\CatalogItems\Model\ErrorList
     */
    public $errors = null;
}
