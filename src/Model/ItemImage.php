<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Image for an item in the Amazon catalog.
 */
class ItemImage extends AbstractModel
{
    /**
     * Variant of the image, such as MAIN or PT01.
     *
     * @var string
     */
    public $variant = null;

    /**
     * Link, or URL, for the image.
     *
     * @var string
     */
    public $link = null;

    /**
     * Height of the image in pixels.
     *
     * @var int
     */
    public $height = null;

    /**
     * Width of the image in pixels.
     *
     * @var int
     */
    public $width = null;
}
