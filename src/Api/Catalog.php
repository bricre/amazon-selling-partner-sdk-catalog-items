<?php

namespace Amz\CatalogItems\Api;

use Amz\CatalogItems\Model\GetCatalogItemResponse;
use Amz\CatalogItems\Model\ListCatalogCategoriesResponse;
use Amz\CatalogItems\Model\ListCatalogItemsResponse;

class Catalog extends AbstractAPI
{
    /**
     * Returns a list of items and their attributes, based on a search query or item
     * identifiers that you specify. When based on a search query, provide the Query
     * parameter and optionally, the QueryContextId parameter. When based on item
     * identifiers, provide a single appropriate parameter based on the identifier
     * type, and specify the associated item value.
     *
     * MarketplaceId is always required. At least one of Query, SellerSKU, UPC, EAN,
     * ISBN, JAN is also required.
     *
     * This operation returns a maximum of ten products and does not return non-buyable
     * products.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 6 | 40 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param array $queries options:
     *                       'MarketplaceId'		A marketplace identifier. Specifies the marketplace for which
     *                       items are returned.
     *                       'Query'		Keyword(s) to use to search for items in the catalog. Example: 'harry
     *                       potter books'.
     *                       'QueryContextId'		An identifier for the context within which the given search
     *                       will be performed. A marketplace might provide mechanisms for constraining a
     *                       search to a subset of potential items. For example, the retail marketplace
     *                       allows queries to be constrained to a specific category. The QueryContextId
     *                       parameter specifies such a subset. If it is omitted, the search will be
     *                       performed using the default context for the marketplace, which will typically
     *                       contain the largest set of items.
     *                       'SellerSKU'		Used to identify an item in the given marketplace. SellerSKU is
     *                       qualified by the seller's SellerId, which is included with every operation that
     *                       you submit.
     *                       'UPC'		A 12-digit bar code used for retail packaging.
     *                       'EAN'		A European article number that uniquely identifies the catalog item,
     *                       manufacturer, and its attributes.
     *                       'ISBN'		The unique commercial book identifier used to identify books
     *                       internationally.
     *                       'JAN'		A Japanese article number that uniquely identifies the product,
     *                       manufacturer, and its attributes.
     *
     * @return ListCatalogItemsResponse
     */
    public function listItems(array $queries = []): ListCatalogItemsResponse
    {
        return $this->request(
        'listCatalogItems',
        'GET',
        'catalog/v0/items',
        null,
        $queries,
        []
        );
    }

    /**
     * Returns a specified item and its attributes.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 2 | 20 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param $asin The Amazon Standard Identification Number (ASIN) of the item
     * @param array $queries options:
     *                       'MarketplaceId'		A marketplace identifier. Specifies the marketplace for the
     *                       item.
     *
     * @return GetCatalogItemResponse
     */
    public function getItem($asin, array $queries = []): GetCatalogItemResponse
    {
        return $this->request(
        'getCatalogItem',
        'GET',
        "catalog/v0/items/$asin",
        null,
        $queries,
        []
        );
    }

    /**
     * Returns the parent categories to which an item belongs, based on the specified
     * ASIN or SellerSKU.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 1 | 40 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param array $queries options:
     *                       'MarketplaceId'		A marketplace identifier. Specifies the marketplace for the
     *                       item.
     *                       'ASIN'		The Amazon Standard Identification Number (ASIN) of the item.
     *                       'SellerSKU'		Used to identify items in the given marketplace. SellerSKU is
     *                       qualified by the seller's SellerId, which is included with every operation that
     *                       you submit.
     *
     * @return ListCatalogCategoriesResponse
     */
    public function listCategories(array $queries = []): ListCatalogCategoriesResponse
    {
        return $this->request(
        'listCatalogCategories',
        'GET',
        'catalog/v0/categories',
        null,
        $queries,
        []
        );
    }
}
