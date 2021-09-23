<?php

namespace Amz\CatalogItems\Api;

use Amz\CatalogItems\Model\ErrorList as ErrorList;
use Amz\CatalogItems\Model\Item as Item;
use Amz\CatalogItems\Model\ItemSearchResults as ItemSearchResults;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Catalog extends AbstractAPI
{
    /**
     * Search for and return a list of Amazon catalog items and associated information.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 1 | 5 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see [Usage Plans and Rate Limits in the Selling Partner
     * API](https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/usage-plans-rate-limits/Usage-Plans-and-Rate-Limits.md).
     *
     * @return ItemSearchResults|ErrorList
     */
    public function searchItems()
    {
        return $this->client->request('searchCatalogItems', 'GET', 'catalog/2020-12-01/items',
            [
            ]
        );
    }

    /**
     * Retrieves details for an item in the Amazon catalog.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 5 | 5 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see [Usage Plans and Rate Limits in the Selling Partner
     * API](https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/usage-plans-rate-limits/Usage-Plans-and-Rate-Limits.md).
     *
     * @param $asin The Amazon Standard Identification Number (ASIN) of the item
     *
     * @return Item|ErrorList
     */
    public function getItem($asin)
    {
        return $this->client->request('getCatalogItem', 'GET', "catalog/2020-12-01/items/{$asin}",
            [
            ]
        );
    }
}
