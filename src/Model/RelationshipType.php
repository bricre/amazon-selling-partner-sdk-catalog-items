<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Specific variations of the item.
 */
class RelationshipType extends AbstractModel
{
    /**
     * The identifiers that uniquely identify the item that is related.
     *
     * @var \Amz\CatalogItems\Model\IdentifierType
     */
    public $Identifiers = null;

    /**
     * The color variation of the item.
     *
     * @var string
     */
    public $Color = null;

    /**
     * The edition variation of the item.
     *
     * @var string
     */
    public $Edition = null;

    /**
     * The flavor variation of the item.
     *
     * @var string
     */
    public $Flavor = null;

    /**
     * The gem type variations of the item.
     *
     * @var string[]
     */
    public $GemType = null;

    /**
     * The golf club flex variation of an item.
     *
     * @var string
     */
    public $GolfClubFlex = null;

    /**
     * The hand orientation variation of an item.
     *
     * @var string
     */
    public $HandOrientation = null;

    /**
     * The hardware platform variation of an item.
     *
     * @var string
     */
    public $HardwarePlatform = null;

    /**
     * The material type variations of an item.
     *
     * @var string[]
     */
    public $MaterialType = null;

    /**
     * The metal type variation of an item.
     *
     * @var string
     */
    public $MetalType = null;

    /**
     * The model variation of an item.
     *
     * @var string
     */
    public $Model = null;

    /**
     * The operating system variations of an item.
     *
     * @var string[]
     */
    public $OperatingSystem = null;

    /**
     * The product type subcategory variation of an item.
     *
     * @var string
     */
    public $ProductTypeSubcategory = null;

    /**
     * The ring size variation of an item.
     *
     * @var string
     */
    public $RingSize = null;

    /**
     * The shaft material variation of an item.
     *
     * @var string
     */
    public $ShaftMaterial = null;

    /**
     * The scent variation of an item.
     *
     * @var string
     */
    public $Scent = null;

    /**
     * The size variation of an item.
     *
     * @var string
     */
    public $Size = null;

    /**
     * The size per pearl variation of an item.
     *
     * @var string
     */
    public $SizePerPearl = null;

    /**
     * The golf club loft variation of an item.
     *
     * @var \Amz\CatalogItems\Model\DecimalWithUnits
     */
    public $GolfClubLoft = null;

    /**
     * The total diamond weight variation of an item.
     *
     * @var \Amz\CatalogItems\Model\DecimalWithUnits
     */
    public $TotalDiamondWeight = null;

    /**
     * The total gem weight variation of an item.
     *
     * @var \Amz\CatalogItems\Model\DecimalWithUnits
     */
    public $TotalGemWeight = null;

    /**
     * The package quantity variation of an item.
     *
     * @var int
     */
    public $PackageQuantity = null;

    /**
     * The item dimensions relationship of an item.
     *
     * @var \Amz\CatalogItems\Model\DimensionType
     */
    public $ItemDimensions = null;
}
