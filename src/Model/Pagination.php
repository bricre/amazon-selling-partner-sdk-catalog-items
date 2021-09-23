<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * When a request produces a response that exceeds the pageSize, pagination occurs.
 * This means the response is divided into individual pages. To retrieve the next
 * page or the previous page, you must pass the nextToken value or the
 * previousToken value as the pageToken parameter in the next request. When you
 * receive the last page, there will be no nextToken key in the pagination object.
 */
class Pagination extends AbstractModel
{
    /**
     * A token that can be used to fetch the next page.
     *
     * @var string
     */
    public $nextToken = null;

    /**
     * A token that can be used to fetch the previous page.
     *
     * @var string
     */
    public $previousToken = null;
}
