<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Items in the Amazon catalog and search related metadata.
 */
class ItemSearchResults extends AbstractModel
{
    /**
     * The estimated total number of products matched by the search query (only results
     * up to the page count limit will be returned per request regardless of the number
     * found).
     *
     * Note: The maximum number of items (ASINs) that can be returned and paged through
     * is 1000.
     *
     * @var int
     */
    public $numberOfResults = null;

    /**
     * If available, the nextToken and/or previousToken values required to return
     * paginated results.
     *
     * @var \Amz\CatalogItems\Model\Pagination
     */
    public $pagination = null;

    /**
     * @var \Amz\CatalogItems\Model\Refinements
     */
    public $refinements = null;

    /**
     * A list of items from the Amazon catalog.
     *
     * @var \Amz\CatalogItems\Model\Item[]
     */
    public $items = null;
}
