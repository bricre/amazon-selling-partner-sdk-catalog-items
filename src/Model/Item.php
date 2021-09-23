<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An item in the Amazon catalog.
 */
class Item extends AbstractModel
{
    /**
     * The identifiers that uniquely identify the item.
     *
     * @var \Amz\CatalogItems\Model\IdentifierType
     */
    public $Identifiers = null;

    /**
     * A list of attributes of the item.
     *
     * @var \Amz\CatalogItems\Model\AttributeSetList
     */
    public $AttributeSets = null;

    /**
     * A list of variation relationship information for the item.
     *
     * @var \Amz\CatalogItems\Model\RelationshipList
     */
    public $Relationships = null;

    /**
     * A list of sales rank information for the item by category.
     *
     * @var \Amz\CatalogItems\Model\SalesRankList
     */
    public $SalesRankings = null;
}
