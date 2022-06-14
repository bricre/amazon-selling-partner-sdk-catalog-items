<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The image attribute of the item.
 */
class Image extends AbstractModel
{
    /**
     * The image URL attribute of the item.
     *
     * @var string
     */
    public $URL = null;

    /**
     * The image height attribute of the item.
     *
     * @var \Amz\CatalogItems\Model\DecimalWithUnits
     */
    public $Height = null;

    /**
     * The image width attribute of the item.
     *
     * @var \Amz\CatalogItems\Model\DecimalWithUnits
     */
    public $Width = null;
}
