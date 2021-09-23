<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Search refinements.
 */
class Refinements extends AbstractModel
{
    /**
     * Brand search refinements.
     *
     * @var \Amz\CatalogItems\Model\BrandRefinement[]
     */
    public $brands = null;

    /**
     * Classification search refinements.
     *
     * @var \Amz\CatalogItems\Model\ClassificationRefinement[]
     */
    public $classifications = null;
}
