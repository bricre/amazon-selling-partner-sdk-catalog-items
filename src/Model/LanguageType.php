<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The language type attribute of an item.
 */
class LanguageType extends AbstractModel
{
    /**
     * The name attribute of the item.
     *
     * @var string
     */
    public $Name = null;

    /**
     * The type attribute of the item.
     *
     * @var string
     */
    public $Type = null;

    /**
     * The audio format attribute of the item.
     *
     * @var string
     */
    public $AudioFormat = null;
}
