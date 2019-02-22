<?php

 namespace aibianchi\ExactOnlineBundle\Model;

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class Item
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=logisticsItems
 *
 * @property string $ID Primary key
 * @property string $Barcode Barcode of the item (numeric string)
 * @property string $Class_01 Item class code referring to ItemClasses with ClassID 1
 * @property string $Class_02 Item class code referring to ItemClasses with ClassID 2
 * @property string $Class_03 Item class code referring to ItemClasses with ClassID 3
 * @property string $Class_04 Item class code referring to ItemClasses with ClassID 4
 * @property string $Class_05 Item class code referring to ItemClasses with ClassID 5
 * @property string $Class_06 Item class code referring to ItemClasses with ClassID 6
 * @property string $Class_07 Item class code referring to ItemClasses with ClassID 7
 * @property string $Class_08 Item class code referring to ItemClasses with ClassID 8
 * @property string $Class_09 Item class code referring to ItemClasses with ClassID 9
 * @property string $Class_10 Item class code referring to ItemClasses with ClassID 10
 * @property string $Code Item code
 * @property int $CopyRemarks Copy sales remarks to sales lines
 * @property string $CostPriceCurrency The currency of the current and proposed cost price
 * @property float $CostPriceNew Proposed cost price
 * @property float $CostPriceStandard The current standard cost price
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the item
 * @property int $Division Division code
 * @property string $EndDate Together with StartDate this determines if the item is active
 * @property string $ExtraDescription Extra description text, slightly longer than the regular description (255 instead of 60)
 * @property bool $FreeBoolField_01 Free boolean field 1
 * @property bool $FreeBoolField_02 Free boolean field 2
 * @property bool $FreeBoolField_03 Free boolean field 3
 * @property bool $FreeBoolField_04 Free boolean field 4
 * @property bool $FreeBoolField_05 Free boolean field 5
 * @property string $FreeDateField_01 Free date field 1
 * @property string $FreeDateField_02 Free date field 2
 * @property string $FreeDateField_03 Free date field 3
 * @property string $FreeDateField_04 Free date field 4
 * @property string $FreeDateField_05 Free date field 5
 * @property float $FreeNumberField_01 Free numeric field 1
 * @property float $FreeNumberField_02 Free numeric field 2
 * @property float $FreeNumberField_03 Free numeric field 3
 * @property float $FreeNumberField_04 Free numeric field 4
 * @property float $FreeNumberField_05 Free numeric field 5
 * @property float $FreeNumberField_06 Free numeric field 6
 * @property float $FreeNumberField_07 Free numeric field 7
 * @property float $FreeNumberField_08 Free numeric field 8
 * @property string $FreeTextField_01 Free text field 1
 * @property string $FreeTextField_02 Free text field 2
 * @property string $FreeTextField_03 Free text field 3
 * @property string $FreeTextField_04 Free text field 4
 * @property string $FreeTextField_05 Free text field 5
 * @property string $FreeTextField_06 Free text field 6
 * @property string $FreeTextField_07 Free text field 7
 * @property string $FreeTextField_08 Free text field 8
 * @property string $FreeTextField_09 Free text field 9
 * @property string $FreeTextField_10 Free text field 10
 * @property string $GLCosts GL account the cost entries will be booked on. This overrules the GL account from the item group. If the license contains 'Intuit integration' this property overrides the value in Settings, not the item group.
 * @property string $GLCostsCode Code of GL account for costs
 * @property string $GLCostsDescription Description of GLCosts
 * @property string $GLRevenue GL account the revenue will be booked on. This overrules the GL account from the item group. If the license contains 'Intuit integration' this property overrides the value in Settings, not the item group.
 * @property string $GLRevenueCode Code of GLRevenue
 * @property string $GLRevenueDescription Description of GLRevenue
 * @property string $GLStock GL account the stock entries will be booked on. This overrules the GL account from the item group. If the license contains 'Intuit integration' this property overrides the value in Settings, not the item group.
 * @property string $GLStockCode Code of GL account for stock
 * @property string $GLStockDescription Description of GLStock
 * @property float $GrossWeight Gross weight for international goods shipments
 * @property int $IsBatchItem Indicates if batches are used for this item
 * @property int $IsBatchNumberItem This property is obsolete. Use property 'IsBatchItem' instead.
 * @property bool $IsFractionAllowedItem Indicates if fractions (for example 0.35) are allowed for quantities of this item
 * @property int $IsMakeItem Indicates that an Item is produced to Inventory, not purchased
 * @property int $IsNewContract Only used for packages (IsPackageItem=1). To indicate if this package is a new contract type package
 * @property int $IsOnDemandItem Is On demand Item
 * @property bool $IsPackageItem Indicates if the item is a package item. Can only be created in the hosting administration
 * @property bool $IsPurchaseItem Indicates if the item can be purchased
 * @property int $IsRegistrationCodeItem Indicated if the item is used in voucher functionality
 * @property bool $IsSalesItem Indicates if the item can be sold
 * @property bool $IsSerialItem Indicates that serial numbers are used for this item
 * @property bool $IsSerialNumberItem This property is obsolete. Use property 'IsSerialItem' instead.
 * @property bool $IsStockItem If you have the Trade or Manufacturing license and you check this property the item will be shown in the stock positions overview, stock counts and transaction lists. If you have the Invoice module and you check this property you will get a general journal entry based on the Stock and Costs G/L accounts of the item group. If you don’t want the general journal entry to be created you should change the Stock/Costs G/L account on the Item group page to the type Costs instead of Inventory.
 * @property bool $IsSubcontractedItem Indicates if the item is provided by an outside supplier
 * @property int $IsTaxableItem Indicates if tax needs to be calculated for this item
 * @property int $IsTime Indicates if the item is a time unit item (for example a labor hour item)
 * @property int $IsWebshopItem Indicates if the item can be exported to a web shop
 * @property string $ItemGroup GUID of Item group of the item
 * @property string $ItemGroupCode Code of ItemGroup
 * @property string $ItemGroupDescription Description of ItemGroup
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property float $NetWeight Net weight for international goods shipments
 * @property string $NetWeightUnit Net Weight unit for international goods shipment, only available in manufacturing packages
 * @property string $Notes Notes
 * @property string $PictureName File name of picture
 * @property string $PictureThumbnailUrl Url where thumbnail picture can be retrieved
 * @property string $PictureUrl Url where picture can be retrieved
 * @property string $SalesVatCode Code of SalesVat
 * @property string $SalesVatCodeDescription Description of SalesVatCode
 * @property string $SearchCode Search code of the item
 * @property int $SecurityLevel Security level (0 - 100)
 * @property string $StartDate Together with EndDate this determines if the item is active
 * @property float $Stock Quantity that is in stock
 * @property string $Unit The standard unit of this item
 * @property string $UnitDescription Description of Unit
 * @property string $UnitType Type of unit: A=Area, L=Length, O=Other, T=Time, V=Volume, W=Weight
 */
class Item extends Model
{
 
 protected $ID;
 protected $Barcode;
 protected $Class_01;
 protected $Class_02;
 protected $Class_03;
 protected $Class_04;
 protected $Class_05;
 protected $Class_06;
 protected $Class_07;
 protected $Class_08;
 protected $Class_09;
 protected $Class_10;
 protected $Code;
 protected $CopyRemarks;
 protected $CostPriceCurrency;
 protected $CostPriceNew;
 protected $CostPriceStandard;
 protected $Created;
 protected $Creator;
 protected $CreatorFullName;
 protected $Description;
 protected $Division;
 protected $EndDate;
 protected $ExtraDescription;
 protected $FreeBoolField_01;
 protected $FreeBoolField_02;
 protected $FreeBoolField_03;
 protected $FreeBoolField_04;
 protected $FreeBoolField_05;
 protected $FreeDateField_01;
 protected $FreeDateField_02;
 protected $FreeDateField_03;
 protected $FreeDateField_04;
 protected $FreeDateField_05;
 protected $FreeNumberField_01;
 protected $FreeNumberField_02;
 protected $FreeNumberField_03;
 protected $FreeNumberField_04;
 protected $FreeNumberField_05;
 protected $FreeNumberField_06;
 protected $FreeNumberField_07;
 protected $FreeNumberField_08;
 protected $FreeTextField_01;
 protected $FreeTextField_02;
 protected $FreeTextField_03;
 protected $FreeTextField_04;
 protected $FreeTextField_05;
 protected $FreeTextField_06;
 protected $FreeTextField_07;
 protected $FreeTextField_08;
 protected $FreeTextField_09;
 protected $FreeTextField_10;
 protected $GLCosts;
 protected $GLCostsCode;
 protected $GLCostsDescription;
 protected $GLRevenue;
 protected $GLRevenueCode;
 protected $GLRevenueDescription;
 protected $GLStock;
 protected $GLStockCode;
 protected $GLStockDescription;
 protected $GrossWeight;
 protected $IsBatchItem;
 protected $IsBatchNumberItem;
 protected $IsFractionAllowedItem;
 protected $IsMakeItem;
 protected $IsNewContract;
 protected $IsOnDemandItem;
 protected $IsPackageItem;
 protected $IsPurchaseItem;
 protected $IsRegistrationCodeItem;
 protected $IsSalesItem;
 protected $IsSerialItem;
 protected $IsSerialNumberItem;
 protected $IsStockItem;
 protected $IsSubcontractedItem;
 protected $IsTaxableItem;
 protected $IsTime;
 protected $IsWebshopItem;
 protected $ItemGroup;
 protected $ItemGroupCode;
 protected $ItemGroupDescription;
 protected $Modified;
 protected $Modifier;
 protected $ModifierFullName;
 protected $NetWeight;
 protected $NetWeightUnit;
 protected $Notes;
 protected $PictureName;
 protected $PictureThumbnailUrl;
 protected $PictureUrl;
 protected $SalesVatCode;
 protected $SalesVatCodeDescription;
 protected $SearchCode;
 protected $SecurityLevel;
 protected $StartDate;
 protected $Stock;
 protected $Unit;
 protected $UnitDescription;
 protected $UnitType;
 protected $url = 'logistics/Items';


 public function getID(){

  return $this->ID; 
}


 public function setID($ID){

  $this->ID = $ID; 

  return $this;
}


 public function getBarcode(){

  return $this->Barcode; 
}


 public function setBarcode($Barcode){

  $this->Barcode = $Barcode; 

  return $this;
}


 public function getClass_01(){

  return $this->Class_01; 
}


 public function setClass_01($Class_01){

  $this->Class_01 = $Class_01; 

  return $this;
}


 public function getClass_02(){

  return $this->Class_02; 
}


 public function setClass_02($Class_02){

  $this->Class_02 = $Class_02; 

  return $this;
}


 public function getClass_03(){

  return $this->Class_03; 
}


 public function setClass_03($Class_03){

  $this->Class_03 = $Class_03; 

  return $this;
}


 public function getClass_04(){

  return $this->Class_04; 
}


 public function setClass_04($Class_04){

  $this->Class_04 = $Class_04; 

  return $this;
}


 public function getClass_05(){

  return $this->Class_05; 
}


 public function setClass_05($Class_05){

  $this->Class_05 = $Class_05; 

  return $this;
}


 public function getClass_06(){

  return $this->Class_06; 
}


 public function setClass_06($Class_06){

  $this->Class_06 = $Class_06; 

  return $this;
}


 public function getClass_07(){

  return $this->Class_07; 
}


 public function setClass_07($Class_07){

  $this->Class_07 = $Class_07; 

  return $this;
}


 public function getClass_08(){

  return $this->Class_08; 
}


 public function setClass_08($Class_08){

  $this->Class_08 = $Class_08; 

  return $this;
}


 public function getClass_09(){

  return $this->Class_09; 
}


 public function setClass_09($Class_09){

  $this->Class_09 = $Class_09; 

  return $this;
}


 public function getClass_10(){

  return $this->Class_10; 
}


 public function setClass_10($Class_10){

  $this->Class_10 = $Class_10; 

  return $this;
}


 public function getCode(){

  return $this->Code; 
}


 public function setCode($Code){

  $this->Code = $Code; 

  return $this;
}


 public function getCopyRemarks(){

  return $this->CopyRemarks; 
}


 public function setCopyRemarks($CopyRemarks){

  $this->CopyRemarks = $CopyRemarks; 

  return $this;
}


 public function getCostPriceCurrency(){

  return $this->CostPriceCurrency; 
}


 public function setCostPriceCurrency($CostPriceCurrency){

  $this->CostPriceCurrency = $CostPriceCurrency; 

  return $this;
}


 public function getCostPriceNew(){

  return $this->CostPriceNew; 
}


 public function setCostPriceNew($CostPriceNew){

  $this->CostPriceNew = $CostPriceNew; 

  return $this;
}


 public function getCostPriceStandard(){

  return $this->CostPriceStandard; 
}


 public function setCostPriceStandard($CostPriceStandard){

  $this->CostPriceStandard = $CostPriceStandard; 

  return $this;
}


 public function getCreated(){

  return $this->Created; 
}


 public function setCreated($Created){

  $this->Created = $Created; 

  return $this;
}


 public function getCreator(){

  return $this->Creator; 
}


 public function setCreator($Creator){

  $this->Creator = $Creator; 

  return $this;
}


 public function getCreatorFullName(){

  return $this->CreatorFullName; 
}


 public function setCreatorFullName($CreatorFullName){

  $this->CreatorFullName = $CreatorFullName; 

  return $this;
}


 public function getDescription(){

  return $this->Description; 
}


 public function setDescription($Description){

  $this->Description = $Description; 

  return $this;
}


 public function getDivision(){

  return $this->Division; 
}


 public function setDivision($Division){

  $this->Division = $Division; 

  return $this;
}


 public function getEndDate(){

  return $this->EndDate; 
}


 public function setEndDate($EndDate){

  $this->EndDate = $EndDate; 

  return $this;
}


 public function getExtraDescription(){

  return $this->ExtraDescription; 
}


 public function setExtraDescription($ExtraDescription){

  $this->ExtraDescription = $ExtraDescription; 

  return $this;
}


 public function getFreeBoolField_01(){

  return $this->FreeBoolField_01; 
}


 public function setFreeBoolField_01($FreeBoolField_01){

  $this->FreeBoolField_01 = $FreeBoolField_01; 

  return $this;
}


 public function getFreeBoolField_02(){

  return $this->FreeBoolField_02; 
}


 public function setFreeBoolField_02($FreeBoolField_02){

  $this->FreeBoolField_02 = $FreeBoolField_02; 

  return $this;
}


 public function getFreeBoolField_03(){

  return $this->FreeBoolField_03; 
}


 public function setFreeBoolField_03($FreeBoolField_03){

  $this->FreeBoolField_03 = $FreeBoolField_03; 

  return $this;
}


 public function getFreeBoolField_04(){

  return $this->FreeBoolField_04; 
}


 public function setFreeBoolField_04($FreeBoolField_04){

  $this->FreeBoolField_04 = $FreeBoolField_04; 

  return $this;
}


 public function getFreeBoolField_05(){

  return $this->FreeBoolField_05; 
}


 public function setFreeBoolField_05($FreeBoolField_05){

  $this->FreeBoolField_05 = $FreeBoolField_05; 

  return $this;
}


 public function getFreeDateField_01(){

  return $this->FreeDateField_01; 
}


 public function setFreeDateField_01($FreeDateField_01){

  $this->FreeDateField_01 = $FreeDateField_01; 

  return $this;
}


 public function getFreeDateField_02(){

  return $this->FreeDateField_02; 
}


 public function setFreeDateField_02($FreeDateField_02){

  $this->FreeDateField_02 = $FreeDateField_02; 

  return $this;
}


 public function getFreeDateField_03(){

  return $this->FreeDateField_03; 
}


 public function setFreeDateField_03($FreeDateField_03){

  $this->FreeDateField_03 = $FreeDateField_03; 

  return $this;
}


 public function getFreeDateField_04(){

  return $this->FreeDateField_04; 
}


 public function setFreeDateField_04($FreeDateField_04){

  $this->FreeDateField_04 = $FreeDateField_04; 

  return $this;
}


 public function getFreeDateField_05(){

  return $this->FreeDateField_05; 
}


 public function setFreeDateField_05($FreeDateField_05){

  $this->FreeDateField_05 = $FreeDateField_05; 

  return $this;
}


 public function getFreeNumberField_01(){

  return $this->FreeNumberField_01; 
}


 public function setFreeNumberField_01($FreeNumberField_01){

  $this->FreeNumberField_01 = $FreeNumberField_01; 

  return $this;
}


 public function getFreeNumberField_02(){

  return $this->FreeNumberField_02; 
}


 public function setFreeNumberField_02($FreeNumberField_02){

  $this->FreeNumberField_02 = $FreeNumberField_02; 

  return $this;
}


 public function getFreeNumberField_03(){

  return $this->FreeNumberField_03; 
}


 public function setFreeNumberField_03($FreeNumberField_03){

  $this->FreeNumberField_03 = $FreeNumberField_03; 

  return $this;
}


 public function getFreeNumberField_04(){

  return $this->FreeNumberField_04; 
}


 public function setFreeNumberField_04($FreeNumberField_04){

  $this->FreeNumberField_04 = $FreeNumberField_04; 

  return $this;
}


 public function getFreeNumberField_05(){

  return $this->FreeNumberField_05; 
}


 public function setFreeNumberField_05($FreeNumberField_05){

  $this->FreeNumberField_05 = $FreeNumberField_05; 

  return $this;
}


 public function getFreeNumberField_06(){

  return $this->FreeNumberField_06; 
}


 public function setFreeNumberField_06($FreeNumberField_06){

  $this->FreeNumberField_06 = $FreeNumberField_06; 

  return $this;
}


 public function getFreeNumberField_07(){

  return $this->FreeNumberField_07; 
}


 public function setFreeNumberField_07($FreeNumberField_07){

  $this->FreeNumberField_07 = $FreeNumberField_07; 

  return $this;
}


 public function getFreeNumberField_08(){

  return $this->FreeNumberField_08; 
}


 public function setFreeNumberField_08($FreeNumberField_08){

  $this->FreeNumberField_08 = $FreeNumberField_08; 

  return $this;
}


 public function getFreeTextField_01(){

  return $this->FreeTextField_01; 
}


 public function setFreeTextField_01($FreeTextField_01){

  $this->FreeTextField_01 = $FreeTextField_01; 

  return $this;
}


 public function getFreeTextField_02(){

  return $this->FreeTextField_02; 
}


 public function setFreeTextField_02($FreeTextField_02){

  $this->FreeTextField_02 = $FreeTextField_02; 

  return $this;
}


 public function getFreeTextField_03(){

  return $this->FreeTextField_03; 
}


 public function setFreeTextField_03($FreeTextField_03){

  $this->FreeTextField_03 = $FreeTextField_03; 

  return $this;
}


 public function getFreeTextField_04(){

  return $this->FreeTextField_04; 
}


 public function setFreeTextField_04($FreeTextField_04){

  $this->FreeTextField_04 = $FreeTextField_04; 

  return $this;
}


 public function getFreeTextField_05(){

  return $this->FreeTextField_05; 
}


 public function setFreeTextField_05($FreeTextField_05){

  $this->FreeTextField_05 = $FreeTextField_05; 

  return $this;
}


 public function getFreeTextField_06(){

  return $this->FreeTextField_06; 
}


 public function setFreeTextField_06($FreeTextField_06){

  $this->FreeTextField_06 = $FreeTextField_06; 

  return $this;
}


 public function getFreeTextField_07(){

  return $this->FreeTextField_07; 
}


 public function setFreeTextField_07($FreeTextField_07){

  $this->FreeTextField_07 = $FreeTextField_07; 

  return $this;
}


 public function getFreeTextField_08(){

  return $this->FreeTextField_08; 
}


 public function setFreeTextField_08($FreeTextField_08){

  $this->FreeTextField_08 = $FreeTextField_08; 

  return $this;
}


 public function getFreeTextField_09(){

  return $this->FreeTextField_09; 
}


 public function setFreeTextField_09($FreeTextField_09){

  $this->FreeTextField_09 = $FreeTextField_09; 

  return $this;
}


 public function getFreeTextField_10(){

  return $this->FreeTextField_10; 
}


 public function setFreeTextField_10($FreeTextField_10){

  $this->FreeTextField_10 = $FreeTextField_10; 

  return $this;
}


 public function getGLCosts(){

  return $this->GLCosts; 
}


 public function setGLCosts($GLCosts){

  $this->GLCosts = $GLCosts; 

  return $this;
}


 public function getGLCostsCode(){

  return $this->GLCostsCode; 
}


 public function setGLCostsCode($GLCostsCode){

  $this->GLCostsCode = $GLCostsCode; 

  return $this;
}


 public function getGLCostsDescription(){

  return $this->GLCostsDescription; 
}


 public function setGLCostsDescription($GLCostsDescription){

  $this->GLCostsDescription = $GLCostsDescription; 

  return $this;
}


 public function getGLRevenue(){

  return $this->GLRevenue; 
}


 public function setGLRevenue($GLRevenue){

  $this->GLRevenue = $GLRevenue; 

  return $this;
}


 public function getGLRevenueCode(){

  return $this->GLRevenueCode; 
}


 public function setGLRevenueCode($GLRevenueCode){

  $this->GLRevenueCode = $GLRevenueCode; 

  return $this;
}


 public function getGLRevenueDescription(){

  return $this->GLRevenueDescription; 
}


 public function setGLRevenueDescription($GLRevenueDescription){

  $this->GLRevenueDescription = $GLRevenueDescription; 

  return $this;
}


 public function getGLStock(){

  return $this->GLStock; 
}


 public function setGLStock($GLStock){

  $this->GLStock = $GLStock; 

  return $this;
}


 public function getGLStockCode(){

  return $this->GLStockCode; 
}


 public function setGLStockCode($GLStockCode){

  $this->GLStockCode = $GLStockCode; 

  return $this;
}


 public function getGLStockDescription(){

  return $this->GLStockDescription; 
}


 public function setGLStockDescription($GLStockDescription){

  $this->GLStockDescription = $GLStockDescription; 

  return $this;
}


 public function getGrossWeight(){

  return $this->GrossWeight; 
}


 public function setGrossWeight($GrossWeight){

  $this->GrossWeight = $GrossWeight; 

  return $this;
}


 public function getIsBatchItem(){

  return $this->IsBatchItem; 
}


 public function setIsBatchItem($IsBatchItem){

  $this->IsBatchItem = $IsBatchItem; 

  return $this;
}


 public function getIsBatchNumberItem(){

  return $this->IsBatchNumberItem; 
}


 public function setIsBatchNumberItem($IsBatchNumberItem){

  $this->IsBatchNumberItem = $IsBatchNumberItem; 

  return $this;
}


 public function getIsFractionAllowedItem(){

  return $this->IsFractionAllowedItem; 
}


 public function setIsFractionAllowedItem($IsFractionAllowedItem){

  $this->IsFractionAllowedItem = $IsFractionAllowedItem; 

  return $this;
}


 public function getIsMakeItem(){

  return $this->IsMakeItem; 
}


 public function setIsMakeItem($IsMakeItem){

  $this->IsMakeItem = $IsMakeItem; 

  return $this;
}


 public function getIsNewContract(){

  return $this->IsNewContract; 
}


 public function setIsNewContract($IsNewContract){

  $this->IsNewContract = $IsNewContract; 

  return $this;
}


 public function getIsOnDemandItem(){

  return $this->IsOnDemandItem; 
}


 public function setIsOnDemandItem($IsOnDemandItem){

  $this->IsOnDemandItem = $IsOnDemandItem; 

  return $this;
}


 public function getIsPackageItem(){

  return $this->IsPackageItem; 
}


 public function setIsPackageItem($IsPackageItem){

  $this->IsPackageItem = $IsPackageItem; 

  return $this;
}


 public function getIsPurchaseItem(){

  return $this->IsPurchaseItem; 
}


 public function setIsPurchaseItem($IsPurchaseItem){

  $this->IsPurchaseItem = $IsPurchaseItem; 

  return $this;
}


 public function getIsRegistrationCodeItem(){

  return $this->IsRegistrationCodeItem; 
}


 public function setIsRegistrationCodeItem($IsRegistrationCodeItem){

  $this->IsRegistrationCodeItem = $IsRegistrationCodeItem; 

  return $this;
}


 public function getIsSalesItem(){

  return $this->IsSalesItem; 
}


 public function setIsSalesItem($IsSalesItem){

  $this->IsSalesItem = $IsSalesItem; 

  return $this;
}


 public function getIsSerialItem(){

  return $this->IsSerialItem; 
}


 public function setIsSerialItem($IsSerialItem){

  $this->IsSerialItem = $IsSerialItem; 

  return $this;
}


 public function getIsSerialNumberItem(){

  return $this->IsSerialNumberItem; 
}


 public function setIsSerialNumberItem($IsSerialNumberItem){

  $this->IsSerialNumberItem = $IsSerialNumberItem; 

  return $this;
}


 public function getIsStockItem(){

  return $this->IsStockItem; 
}


 public function setIsStockItem($IsStockItem){

  $this->IsStockItem = $IsStockItem; 

  return $this;
}


 public function getIsSubcontractedItem(){

  return $this->IsSubcontractedItem; 
}


 public function setIsSubcontractedItem($IsSubcontractedItem){

  $this->IsSubcontractedItem = $IsSubcontractedItem; 

  return $this;
}


 public function getIsTaxableItem(){

  return $this->IsTaxableItem; 
}


 public function setIsTaxableItem($IsTaxableItem){

  $this->IsTaxableItem = $IsTaxableItem; 

  return $this;
}


 public function getIsTime(){

  return $this->IsTime; 
}


 public function setIsTime($IsTime){

  $this->IsTime = $IsTime; 

  return $this;
}


 public function getIsWebshopItem(){

  return $this->IsWebshopItem; 
}


 public function setIsWebshopItem($IsWebshopItem){

  $this->IsWebshopItem = $IsWebshopItem; 

  return $this;
}


 public function getItemGroup(){

  return $this->ItemGroup; 
}


 public function setItemGroup($ItemGroup){

  $this->ItemGroup = $ItemGroup; 

  return $this;
}


 public function getItemGroupCode(){

  return $this->ItemGroupCode; 
}


 public function setItemGroupCode($ItemGroupCode){

  $this->ItemGroupCode = $ItemGroupCode; 

  return $this;
}


 public function getItemGroupDescription(){

  return $this->ItemGroupDescription; 
}


 public function setItemGroupDescription($ItemGroupDescription){

  $this->ItemGroupDescription = $ItemGroupDescription; 

  return $this;
}


 public function getModified(){

  return $this->Modified; 
}


 public function setModified($Modified){

  $this->Modified = $Modified; 

  return $this;
}


 public function getModifier(){

  return $this->Modifier; 
}


 public function setModifier($Modifier){

  $this->Modifier = $Modifier; 

  return $this;
}


 public function getModifierFullName(){

  return $this->ModifierFullName; 
}


 public function setModifierFullName($ModifierFullName){

  $this->ModifierFullName = $ModifierFullName; 

  return $this;
}


 public function getNetWeight(){

  return $this->NetWeight; 
}


 public function setNetWeight($NetWeight){

  $this->NetWeight = $NetWeight; 

  return $this;
}


 public function getNetWeightUnit(){

  return $this->NetWeightUnit; 
}


 public function setNetWeightUnit($NetWeightUnit){

  $this->NetWeightUnit = $NetWeightUnit; 

  return $this;
}


 public function getNotes(){

  return $this->Notes; 
}


 public function setNotes($Notes){

  $this->Notes = $Notes; 

  return $this;
}


 public function getPictureName(){

  return $this->PictureName; 
}


 public function setPictureName($PictureName){

  $this->PictureName = $PictureName; 

  return $this;
}


 public function getPictureThumbnailUrl(){

  return $this->PictureThumbnailUrl; 
}


 public function setPictureThumbnailUrl($PictureThumbnailUrl){

  $this->PictureThumbnailUrl = $PictureThumbnailUrl; 

  return $this;
}


 public function getPictureUrl(){

  return $this->PictureUrl; 
}


 public function setPictureUrl($PictureUrl){

  $this->PictureUrl = $PictureUrl; 

  return $this;
}


 public function getSalesVatCode(){

  return $this->SalesVatCode; 
}


 public function setSalesVatCode($SalesVatCode){

  $this->SalesVatCode = $SalesVatCode; 

  return $this;
}


 public function getSalesVatCodeDescription(){

  return $this->SalesVatCodeDescription; 
}


 public function setSalesVatCodeDescription($SalesVatCodeDescription){

  $this->SalesVatCodeDescription = $SalesVatCodeDescription; 

  return $this;
}


 public function getSearchCode(){

  return $this->SearchCode; 
}


 public function setSearchCode($SearchCode){

  $this->SearchCode = $SearchCode; 

  return $this;
}


 public function getSecurityLevel(){

  return $this->SecurityLevel; 
}


 public function setSecurityLevel($SecurityLevel){

  $this->SecurityLevel = $SecurityLevel; 

  return $this;
}


 public function getStartDate(){

  return $this->StartDate; 
}


 public function setStartDate($StartDate){

  $this->StartDate = $StartDate; 

  return $this;
}


 public function getStock(){

  return $this->Stock; 
}


 public function setStock($Stock){

  $this->Stock = $Stock; 

  return $this;
}


 public function getUnit(){

  return $this->Unit; 
}


 public function setUnit($Unit){

  $this->Unit = $Unit; 

  return $this;
}


 public function getUnitDescription(){

  return $this->UnitDescription; 
}


 public function setUnitDescription($UnitDescription){

  $this->UnitDescription = $UnitDescription; 

  return $this;
}


 public function getUnitType(){

  return $this->UnitType; 
}


 public function setUnitType($UnitType){

  $this->UnitType = $UnitType; 

  return $this;
}


    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }
}