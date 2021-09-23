<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Identifier associated with the item in the Amazon catalog, such as a UPC or EAN
 * identifier.
 */
class ItemIdentifier extends AbstractModel
{
    /**
     * Type of identifier, such as UPC, EAN, or ISBN.
     *
     * @var string
     */
    public $identifierType = null;

    /**
     * Identifier.
     *
     * @var string
     */
    public $identifier = null;
}
