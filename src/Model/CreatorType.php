<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The creator type attribute of an item.
 */
class CreatorType extends AbstractModel
{
    /**
     * The value of the attribute.
     *
     * @var string
     */
    public $value = null;

    /**
     * The role of the value.
     *
     * @var string
     */
    public $Role = null;
}
