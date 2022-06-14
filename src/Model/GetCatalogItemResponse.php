<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel;

class GetCatalogItemResponse extends AbstractModel
{
    /**
     * The payload for the getCatalogItem operation.
     *
     * @var \Amz\CatalogItems\Model\Item
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the getCatalogItem operation.
     *
     * @var \Amz\CatalogItems\Model\ErrorList
     */
    public $errors = null;
}
