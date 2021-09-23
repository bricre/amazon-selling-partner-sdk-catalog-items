<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The dimension type attribute of an item.
 */
class DimensionType extends AbstractModel
{
    /**
     * The height attribute of the dimension.
     *
     * @var \Amz\CatalogItems\Model\DecimalWithUnits
     */
    public $Height = null;

    /**
     * The length attribute of the dimension.
     *
     * @var \Amz\CatalogItems\Model\DecimalWithUnits
     */
    public $Length = null;

    /**
     * The width attribute of the dimension.
     *
     * @var \Amz\CatalogItems\Model\DecimalWithUnits
     */
    public $Width = null;

    /**
     * The weight attribute of the dimension.
     *
     * @var \Amz\CatalogItems\Model\DecimalWithUnits
     */
    public $Weight = null;
}
