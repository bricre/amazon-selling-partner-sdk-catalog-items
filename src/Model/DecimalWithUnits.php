<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The decimal value and unit.
 */
class DecimalWithUnits extends AbstractModel
{
    /**
     * The decimal value.
     *
     * @var float
     */
    public $value = null;

    /**
     * The unit of the decimal value.
     *
     * @var string
     */
    public $Units = null;
}
