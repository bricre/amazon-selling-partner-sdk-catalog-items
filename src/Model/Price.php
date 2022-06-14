<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The price attribute of the item.
 */
class Price extends AbstractModel
{
    /**
     * The amount.
     *
     * @var float
     */
    public $Amount = null;

    /**
     * The currency code of the amount.
     *
     * @var string
     */
    public $CurrencyCode = null;
}
