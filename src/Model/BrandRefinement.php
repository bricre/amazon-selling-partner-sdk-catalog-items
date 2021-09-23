<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Description of a brand that can be used to get more fine-grained search results.
 */
class BrandRefinement extends AbstractModel
{
    /**
     * The estimated number of results that would still be returned if refinement key
     * applied.
     *
     * @var int
     */
    public $numberOfResults = null;

    /**
     * Brand name. For display and can be used as a search refinement.
     *
     * @var string
     */
    public $brandName = null;
}
