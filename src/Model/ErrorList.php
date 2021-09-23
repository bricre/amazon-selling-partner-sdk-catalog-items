<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A list of error responses returned when a request is unsuccessful.
 */
class ErrorList extends AbstractModel
{
    /**
     * @var \Amz\CatalogItems\Model\Error[]
     */
    public $errors = null;
}
