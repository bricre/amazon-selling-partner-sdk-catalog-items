<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Description of a classification that can be used to get more fine-grained search
 * results.
 */
class ClassificationRefinement extends AbstractModel
{
    /**
     * The estimated number of results that would still be returned if refinement key
     * applied.
     *
     * @var int
     */
    public $numberOfResults = null;

    /**
     * Display name for the classification.
     *
     * @var string
     */
    public $displayName = null;

    /**
     * Identifier for the classification that can be used for search refinement
     * purposes.
     *
     * @var string
     */
    public $classificationId = null;
}
