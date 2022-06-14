<?php

namespace Amz\CatalogItems\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The attributes of the item.
 */
class AttributeSetListType extends AbstractModel
{
    /**
     * The actor attributes of the item.
     *
     * @var string[]
     */
    public $Actor = null;

    /**
     * The artist attributes of the item.
     *
     * @var string[]
     */
    public $Artist = null;

    /**
     * The aspect ratio attribute of the item.
     *
     * @var string
     */
    public $AspectRatio = null;

    /**
     * The audience rating attribute of the item.
     *
     * @var string
     */
    public $AudienceRating = null;

    /**
     * The author attributes of the item.
     *
     * @var string[]
     */
    public $Author = null;

    /**
     * The back finding attribute of the item.
     *
     * @var string
     */
    public $BackFinding = null;

    /**
     * The band material type attribute of the item.
     *
     * @var string
     */
    public $BandMaterialType = null;

    /**
     * The binding attribute of the item.
     *
     * @var string
     */
    public $Binding = null;

    /**
     * The Bluray region attribute of the item.
     *
     * @var string
     */
    public $BlurayRegion = null;

    /**
     * The brand attribute of the item.
     *
     * @var string
     */
    public $Brand = null;

    /**
     * The CERO age rating attribute of the item.
     *
     * @var string
     */
    public $CeroAgeRating = null;

    /**
     * The chain type attribute of the item.
     *
     * @var string
     */
    public $ChainType = null;

    /**
     * The clasp type attribute of the item.
     *
     * @var string
     */
    public $ClaspType = null;

    /**
     * The color attribute of the item.
     *
     * @var string
     */
    public $Color = null;

    /**
     * The CPU manufacturer attribute of the item.
     *
     * @var string
     */
    public $CpuManufacturer = null;

    /**
     * The CPU speed attribute of the item.
     *
     * @var \Amz\CatalogItems\Model\DecimalWithUnits
     */
    public $CpuSpeed = null;

    /**
     * The CPU type attribute of the item.
     *
     * @var string
     */
    public $CpuType = null;

    /**
     * The creator attributes of the item.
     *
     * @var \Amz\CatalogItems\Model\CreatorType[]
     */
    public $Creator = null;

    /**
     * The department attribute of the item.
     *
     * @var string
     */
    public $Department = null;

    /**
     * The director attributes of the item.
     *
     * @var string[]
     */
    public $Director = null;

    /**
     * The display size attribute of the item.
     *
     * @var \Amz\CatalogItems\Model\DecimalWithUnits
     */
    public $DisplaySize = null;

    /**
     * The edition attribute of the item.
     *
     * @var string
     */
    public $Edition = null;

    /**
     * The episode sequence attribute of the item.
     *
     * @var string
     */
    public $EpisodeSequence = null;

    /**
     * The ESRB age rating attribute of the item.
     *
     * @var string
     */
    public $EsrbAgeRating = null;

    /**
     * The feature attributes of the item.
     *
     * @var string[]
     */
    public $Feature = null;

    /**
     * The flavor attribute of the item.
     *
     * @var string
     */
    public $Flavor = null;

    /**
     * The format attributes of the item.
     *
     * @var string[]
     */
    public $Format = null;

    /**
     * The gem type attributes of the item.
     *
     * @var string[]
     */
    public $GemType = null;

    /**
     * The genre attribute of the item.
     *
     * @var string
     */
    public $Genre = null;

    /**
     * The golf club flex attribute of the item.
     *
     * @var string
     */
    public $GolfClubFlex = null;

    /**
     * The golf club loft attribute of the item.
     *
     * @var \Amz\CatalogItems\Model\DecimalWithUnits
     */
    public $GolfClubLoft = null;

    /**
     * The hand orientation attribute of the item.
     *
     * @var string
     */
    public $HandOrientation = null;

    /**
     * The hard disk interface attribute of the item.
     *
     * @var string
     */
    public $HardDiskInterface = null;

    /**
     * The hard disk size attribute of the item.
     *
     * @var \Amz\CatalogItems\Model\DecimalWithUnits
     */
    public $HardDiskSize = null;

    /**
     * The hardware platform attribute of the item.
     *
     * @var string
     */
    public $HardwarePlatform = null;

    /**
     * The hazardous material type attribute of the item.
     *
     * @var string
     */
    public $HazardousMaterialType = null;

    /**
     * The item dimensions attribute of the item.
     *
     * @var \Amz\CatalogItems\Model\DimensionType
     */
    public $ItemDimensions = null;

    /**
     * The adult product attribute of the item.
     *
     * @var bool
     */
    public $IsAdultProduct = null;

    /**
     * The autographed attribute of the item.
     *
     * @var bool
     */
    public $IsAutographed = null;

    /**
     * The is eligible for trade in attribute of the item.
     *
     * @var bool
     */
    public $IsEligibleForTradeIn = null;

    /**
     * The is memorabilia attribute of the item.
     *
     * @var bool
     */
    public $IsMemorabilia = null;

    /**
     * The issues per year attribute of the item.
     *
     * @var string
     */
    public $IssuesPerYear = null;

    /**
     * The item part number attribute of the item.
     *
     * @var string
     */
    public $ItemPartNumber = null;

    /**
     * The label attribute of the item.
     *
     * @var string
     */
    public $Label = null;

    /**
     * The languages attribute of the item.
     *
     * @var \Amz\CatalogItems\Model\LanguageType[]
     */
    public $Languages = null;

    /**
     * The legal disclaimer attribute of the item.
     *
     * @var string
     */
    public $LegalDisclaimer = null;

    /**
     * The list price attribute of the item.
     *
     * @var \Amz\CatalogItems\Model\Price
     */
    public $ListPrice = null;

    /**
     * The manufacturer attribute of the item.
     *
     * @var string
     */
    public $Manufacturer = null;

    /**
     * The manufacturer maximum age attribute of the item.
     *
     * @var \Amz\CatalogItems\Model\DecimalWithUnits
     */
    public $ManufacturerMaximumAge = null;

    /**
     * The manufacturer minimum age attribute of the item.
     *
     * @var \Amz\CatalogItems\Model\DecimalWithUnits
     */
    public $ManufacturerMinimumAge = null;

    /**
     * The manufacturer parts warranty description attribute of the item.
     *
     * @var string
     */
    public $ManufacturerPartsWarrantyDescription = null;

    /**
     * The material type attributes of the item.
     *
     * @var string[]
     */
    public $MaterialType = null;

    /**
     * The maximum resolution attribute of the item.
     *
     * @var \Amz\CatalogItems\Model\DecimalWithUnits
     */
    public $MaximumResolution = null;

    /**
     * The media type attributes of the item.
     *
     * @var string[]
     */
    public $MediaType = null;

    /**
     * The metal stamp attribute of the item.
     *
     * @var string
     */
    public $MetalStamp = null;

    /**
     * The metal type attribute of the item.
     *
     * @var string
     */
    public $MetalType = null;

    /**
     * The model attribute of the item.
     *
     * @var string
     */
    public $Model = null;

    /**
     * The number of discs attribute of the item.
     *
     * @var int
     */
    public $NumberOfDiscs = null;

    /**
     * The number of issues attribute of the item.
     *
     * @var int
     */
    public $NumberOfIssues = null;

    /**
     * The number of items attribute of the item.
     *
     * @var int
     */
    public $NumberOfItems = null;

    /**
     * The number of pages attribute of the item.
     *
     * @var int
     */
    public $NumberOfPages = null;

    /**
     * The number of tracks attribute of the item.
     *
     * @var int
     */
    public $NumberOfTracks = null;

    /**
     * The operating system attributes of the item.
     *
     * @var string[]
     */
    public $OperatingSystem = null;

    /**
     * The optical zoom attribute of the item.
     *
     * @var \Amz\CatalogItems\Model\DecimalWithUnits
     */
    public $OpticalZoom = null;

    /**
     * The package dimensions attribute of the item.
     *
     * @var \Amz\CatalogItems\Model\DimensionType
     */
    public $PackageDimensions = null;

    /**
     * The package quantity attribute of the item.
     *
     * @var int
     */
    public $PackageQuantity = null;

    /**
     * The part number attribute of the item.
     *
     * @var string
     */
    public $PartNumber = null;

    /**
     * The PEGI rating attribute of the item.
     *
     * @var string
     */
    public $PegiRating = null;

    /**
     * The platform attributes of the item.
     *
     * @var string[]
     */
    public $Platform = null;

    /**
     * The processor count attribute of the item.
     *
     * @var int
     */
    public $ProcessorCount = null;

    /**
     * The product group attribute of the item.
     *
     * @var string
     */
    public $ProductGroup = null;

    /**
     * The product type name attribute of the item.
     *
     * @var string
     */
    public $ProductTypeName = null;

    /**
     * The product type subcategory attribute of the item.
     *
     * @var string
     */
    public $ProductTypeSubcategory = null;

    /**
     * The publication date attribute of the item.
     *
     * @var string
     */
    public $PublicationDate = null;

    /**
     * The publisher attribute of the item.
     *
     * @var string
     */
    public $Publisher = null;

    /**
     * The region code attribute of the item.
     *
     * @var string
     */
    public $RegionCode = null;

    /**
     * The release date attribute of the item.
     *
     * @var string
     */
    public $ReleaseDate = null;

    /**
     * The ring size attribute of the item.
     *
     * @var string
     */
    public $RingSize = null;

    /**
     * The running time attribute of the item.
     *
     * @var \Amz\CatalogItems\Model\DecimalWithUnits
     */
    public $RunningTime = null;

    /**
     * The shaft material attribute of the item.
     *
     * @var string
     */
    public $ShaftMaterial = null;

    /**
     * The scent attribute of the item.
     *
     * @var string
     */
    public $Scent = null;

    /**
     * The season sequence attribute of the item.
     *
     * @var string
     */
    public $SeasonSequence = null;

    /**
     * The Seikodo product code attribute of the item.
     *
     * @var string
     */
    public $SeikodoProductCode = null;

    /**
     * The size attribute of the item.
     *
     * @var string
     */
    public $Size = null;

    /**
     * The size per pearl attribute of the item.
     *
     * @var string
     */
    public $SizePerPearl = null;

    /**
     * The small image attribute of the item.
     *
     * @var \Amz\CatalogItems\Model\Image
     */
    public $SmallImage = null;

    /**
     * The studio attribute of the item.
     *
     * @var string
     */
    public $Studio = null;

    /**
     * The subscription length attribute of the item.
     *
     * @var \Amz\CatalogItems\Model\DecimalWithUnits
     */
    public $SubscriptionLength = null;

    /**
     * The system memory size attribute of the item.
     *
     * @var \Amz\CatalogItems\Model\DecimalWithUnits
     */
    public $SystemMemorySize = null;

    /**
     * The system memory type attribute of the item.
     *
     * @var string
     */
    public $SystemMemoryType = null;

    /**
     * The theatrical release date attribute of the item.
     *
     * @var string
     */
    public $TheatricalReleaseDate = null;

    /**
     * The title attribute of the item.
     *
     * @var string
     */
    public $Title = null;

    /**
     * The total diamond weight attribute of the item.
     *
     * @var \Amz\CatalogItems\Model\DecimalWithUnits
     */
    public $TotalDiamondWeight = null;

    /**
     * The total gem weight attribute of the item.
     *
     * @var \Amz\CatalogItems\Model\DecimalWithUnits
     */
    public $TotalGemWeight = null;

    /**
     * The warranty attribute of the item.
     *
     * @var string
     */
    public $Warranty = null;

    /**
     * The WEEE tax value attribute of the item.
     *
     * @var \Amz\CatalogItems\Model\Price
     */
    public $WeeeTaxValue = null;
}
