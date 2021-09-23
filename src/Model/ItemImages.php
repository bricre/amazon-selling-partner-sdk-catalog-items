<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Images for an item in the Amazon catalog. All image variants are provided to
 * brand owners. Otherwise, a thumbnail of the "MAIN" image variant is provided.
 */
class ItemImages extends AbstractModel
{
    protected $isRawObject = true;
}
