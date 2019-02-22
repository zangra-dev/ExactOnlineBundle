<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class Address extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMAddresses
 *
 * @property string $ID Primary key
 * @property string $Account Account linked to the address
 * @property bool $AccountIsSupplier Indicates if the account is a supplier
 * @property string $AccountName Name of the account
 * @property string $AddressLine1 First address line
 * @property string $AddressLine2 Second address line
 * @property string $AddressLine3 Third address line
 * @property string $City City
 * @property string $Contact Contact linked to Address
 * @property string $ContactName Contact name
 * @property string $Country Country code
 * @property string $CountryName Country name
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $Fax Fax number
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
 * @property float $FreeNumberField_01 Free number field 1
 * @property float $FreeNumberField_02 Free number field 2
 * @property float $FreeNumberField_03 Free number field 3
 * @property float $FreeNumberField_04 Free number field 4
 * @property float $FreeNumberField_05 Free number field 5
 * @property string $FreeTextField_01 Free text field 1
 * @property string $FreeTextField_02 Free text field 2
 * @property string $FreeTextField_03 Free text field 3
 * @property string $FreeTextField_04 Free text field 4
 * @property string $FreeTextField_05 Free text field 5
 * @property string $Mailbox Mailbox
 * @property bool $Main Indicates if the address is the main address for this type
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $NicNumber Last 5 digits of SIRET number which is an intern sequential number of 4 digits representing the identification of the localization of the office
 * @property string $Notes Notes for an address
 * @property string $Phone Phone number
 * @property string $PhoneExtension Phone extension
 * @property string $Postcode Postcode
 * @property string $State State
 * @property string $StateDescription Name of the State
 * @property int $Type The type of address. Visit=1, Postal=2, Invoice=3, Delivery=4
 * @property string $Warehouse The warehouse linked to the address, if a warehouse is linked the account will be empty. Can only be filled for type=Delivery
 * @property string $WarehouseCode Code of the warehoude
 * @property string $WarehouseDescription Description of the warehouse
 */
class Address extends Model 
{
        protected $ID;
        protected $Account;
        protected $AccountIsSupplier;
        protected $AccountName;
        protected $AddressLine1;
        protected $AddressLine2;
        protected $AddressLine3;
        protected $City;
        protected $Contact;
        protected $ContactName;
        protected $Country;
        protected $CountryName;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Division;
        protected $Fax;
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
        protected $FreeTextField_01;
        protected $FreeTextField_02;
        protected $FreeTextField_03;
        protected $FreeTextField_04;
        protected $FreeTextField_05;
        protected $Mailbox;
        protected $Main;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $NicNumber;
        protected $Notes;
        protected $Phone;
        protected $PhoneExtension;
        protected $Postcode;
        protected $State;
        protected $StateDescription;
        protected $Type;
        protected $Warehouse;
        protected $WarehouseCode;
        protected $WarehouseDescription;
        protected $url = 'crm/Addresses';

    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param mixed $ID
     *
     * @return self
     */
    public function setID($ID)
    {
        $this->ID = $ID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccount()
    {
        return $this->Account;
    }

    /**
     * @param mixed $Account
     *
     * @return self
     */
    public function setAccount($Account)
    {
        $this->Account = $Account;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountIsSupplier()
    {
        return $this->AccountIsSupplier;
    }

    /**
     * @param mixed $AccountIsSupplier
     *
     * @return self
     */
    public function setAccountIsSupplier($AccountIsSupplier)
    {
        $this->AccountIsSupplier = $AccountIsSupplier;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountName()
    {
        return $this->AccountName;
    }

    /**
     * @param mixed $AccountName
     *
     * @return self
     */
    public function setAccountName($AccountName)
    {
        $this->AccountName = $AccountName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddressLine1()
    {
        return $this->AddressLine1;
    }

    /**
     * @param mixed $AddressLine1
     *
     * @return self
     */
    public function setAddressLine1($AddressLine1)
    {
        $this->AddressLine1 = $AddressLine1;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddressLine2()
    {
        return $this->AddressLine2;
    }

    /**
     * @param mixed $AddressLine2
     *
     * @return self
     */
    public function setAddressLine2($AddressLine2)
    {
        $this->AddressLine2 = $AddressLine2;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddressLine3()
    {
        return $this->AddressLine3;
    }

    /**
     * @param mixed $AddressLine3
     *
     * @return self
     */
    public function setAddressLine3($AddressLine3)
    {
        $this->AddressLine3 = $AddressLine3;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param mixed $City
     *
     * @return self
     */
    public function setCity($City)
    {
        $this->City = $City;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getContact()
    {
        return $this->Contact;
    }

    /**
     * @param mixed $Contact
     *
     * @return self
     */
    public function setContact($Contact)
    {
        $this->Contact = $Contact;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getContactName()
    {
        return $this->ContactName;
    }

    /**
     * @param mixed $ContactName
     *
     * @return self
     */
    public function setContactName($ContactName)
    {
        $this->ContactName = $ContactName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param mixed $Country
     *
     * @return self
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountryName()
    {
        return $this->CountryName;
    }

    /**
     * @param mixed $CountryName
     *
     * @return self
     */
    public function setCountryName($CountryName)
    {
        $this->CountryName = $CountryName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->Created;
    }

    /**
     * @param mixed $Created
     *
     * @return self
     */
    public function setCreated($Created)
    {
        $this->Created = $Created;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreator()
    {
        return $this->Creator;
    }

    /**
     * @param mixed $Creator
     *
     * @return self
     */
    public function setCreator($Creator)
    {
        $this->Creator = $Creator;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatorFullName()
    {
        return $this->CreatorFullName;
    }

    /**
     * @param mixed $CreatorFullName
     *
     * @return self
     */
    public function setCreatorFullName($CreatorFullName)
    {
        $this->CreatorFullName = $CreatorFullName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDivision()
    {
        return $this->Division;
    }

    /**
     * @param mixed $Division
     *
     * @return self
     */
    public function setDivision($Division)
    {
        $this->Division = $Division;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFax()
    {
        return $this->Fax;
    }

    /**
     * @param mixed $Fax
     *
     * @return self
     */
    public function setFax($Fax)
    {
        $this->Fax = $Fax;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFreeBoolField01()
    {
        return $this->FreeBoolField_01;
    }

    /**
     * @param mixed $FreeBoolField_01
     *
     * @return self
     */
    public function setFreeBoolField01($FreeBoolField_01)
    {
        $this->FreeBoolField_01 = $FreeBoolField_01;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFreeBoolField02()
    {
        return $this->FreeBoolField_02;
    }

    /**
     * @param mixed $FreeBoolField_02
     *
     * @return self
     */
    public function setFreeBoolField02($FreeBoolField_02)
    {
        $this->FreeBoolField_02 = $FreeBoolField_02;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFreeBoolField03()
    {
        return $this->FreeBoolField_03;
    }

    /**
     * @param mixed $FreeBoolField_03
     *
     * @return self
     */
    public function setFreeBoolField03($FreeBoolField_03)
    {
        $this->FreeBoolField_03 = $FreeBoolField_03;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFreeBoolField04()
    {
        return $this->FreeBoolField_04;
    }

    /**
     * @param mixed $FreeBoolField_04
     *
     * @return self
     */
    public function setFreeBoolField04($FreeBoolField_04)
    {
        $this->FreeBoolField_04 = $FreeBoolField_04;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFreeBoolField05()
    {
        return $this->FreeBoolField_05;
    }

    /**
     * @param mixed $FreeBoolField_05
     *
     * @return self
     */
    public function setFreeBoolField05($FreeBoolField_05)
    {
        $this->FreeBoolField_05 = $FreeBoolField_05;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFreeDateField01()
    {
        return $this->FreeDateField_01;
    }

    /**
     * @param mixed $FreeDateField_01
     *
     * @return self
     */
    public function setFreeDateField01($FreeDateField_01)
    {
        $this->FreeDateField_01 = $FreeDateField_01;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFreeDateField02()
    {
        return $this->FreeDateField_02;
    }

    /**
     * @param mixed $FreeDateField_02
     *
     * @return self
     */
    public function setFreeDateField02($FreeDateField_02)
    {
        $this->FreeDateField_02 = $FreeDateField_02;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFreeDateField03()
    {
        return $this->FreeDateField_03;
    }

    /**
     * @param mixed $FreeDateField_03
     *
     * @return self
     */
    public function setFreeDateField03($FreeDateField_03)
    {
        $this->FreeDateField_03 = $FreeDateField_03;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFreeDateField04()
    {
        return $this->FreeDateField_04;
    }

    /**
     * @param mixed $FreeDateField_04
     *
     * @return self
     */
    public function setFreeDateField04($FreeDateField_04)
    {
        $this->FreeDateField_04 = $FreeDateField_04;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFreeDateField05()
    {
        return $this->FreeDateField_05;
    }

    /**
     * @param mixed $FreeDateField_05
     *
     * @return self
     */
    public function setFreeDateField05($FreeDateField_05)
    {
        $this->FreeDateField_05 = $FreeDateField_05;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFreeNumberField01()
    {
        return $this->FreeNumberField_01;
    }

    /**
     * @param mixed $FreeNumberField_01
     *
     * @return self
     */
    public function setFreeNumberField01($FreeNumberField_01)
    {
        $this->FreeNumberField_01 = $FreeNumberField_01;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFreeNumberField02()
    {
        return $this->FreeNumberField_02;
    }

    /**
     * @param mixed $FreeNumberField_02
     *
     * @return self
     */
    public function setFreeNumberField02($FreeNumberField_02)
    {
        $this->FreeNumberField_02 = $FreeNumberField_02;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFreeNumberField03()
    {
        return $this->FreeNumberField_03;
    }

    /**
     * @param mixed $FreeNumberField_03
     *
     * @return self
     */
    public function setFreeNumberField03($FreeNumberField_03)
    {
        $this->FreeNumberField_03 = $FreeNumberField_03;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFreeNumberField04()
    {
        return $this->FreeNumberField_04;
    }

    /**
     * @param mixed $FreeNumberField_04
     *
     * @return self
     */
    public function setFreeNumberField04($FreeNumberField_04)
    {
        $this->FreeNumberField_04 = $FreeNumberField_04;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFreeNumberField05()
    {
        return $this->FreeNumberField_05;
    }

    /**
     * @param mixed $FreeNumberField_05
     *
     * @return self
     */
    public function setFreeNumberField05($FreeNumberField_05)
    {
        $this->FreeNumberField_05 = $FreeNumberField_05;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFreeTextField01()
    {
        return $this->FreeTextField_01;
    }

    /**
     * @param mixed $FreeTextField_01
     *
     * @return self
     */
    public function setFreeTextField01($FreeTextField_01)
    {
        $this->FreeTextField_01 = $FreeTextField_01;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFreeTextField02()
    {
        return $this->FreeTextField_02;
    }

    /**
     * @param mixed $FreeTextField_02
     *
     * @return self
     */
    public function setFreeTextField02($FreeTextField_02)
    {
        $this->FreeTextField_02 = $FreeTextField_02;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFreeTextField03()
    {
        return $this->FreeTextField_03;
    }

    /**
     * @param mixed $FreeTextField_03
     *
     * @return self
     */
    public function setFreeTextField03($FreeTextField_03)
    {
        $this->FreeTextField_03 = $FreeTextField_03;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFreeTextField04()
    {
        return $this->FreeTextField_04;
    }

    /**
     * @param mixed $FreeTextField_04
     *
     * @return self
     */
    public function setFreeTextField04($FreeTextField_04)
    {
        $this->FreeTextField_04 = $FreeTextField_04;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFreeTextField05()
    {
        return $this->FreeTextField_05;
    }

    /**
     * @param mixed $FreeTextField_05
     *
     * @return self
     */
    public function setFreeTextField05($FreeTextField_05)
    {
        $this->FreeTextField_05 = $FreeTextField_05;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMailbox()
    {
        return $this->Mailbox;
    }

    /**
     * @param mixed $Mailbox
     *
     * @return self
     */
    public function setMailbox($Mailbox)
    {
        $this->Mailbox = $Mailbox;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMain()
    {
        return $this->Main;
    }

    /**
     * @param mixed $Main
     *
     * @return self
     */
    public function setMain($Main)
    {
        $this->Main = $Main;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getModified()
    {
        return $this->Modified;
    }

    /**
     * @param mixed $Modified
     *
     * @return self
     */
    public function setModified($Modified)
    {
        $this->Modified = $Modified;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getModifier()
    {
        return $this->Modifier;
    }

    /**
     * @param mixed $Modifier
     *
     * @return self
     */
    public function setModifier($Modifier)
    {
        $this->Modifier = $Modifier;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getModifierFullName()
    {
        return $this->ModifierFullName;
    }

    /**
     * @param mixed $ModifierFullName
     *
     * @return self
     */
    public function setModifierFullName($ModifierFullName)
    {
        $this->ModifierFullName = $ModifierFullName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNicNumber()
    {
        return $this->NicNumber;
    }

    /**
     * @param mixed $NicNumber
     *
     * @return self
     */
    public function setNicNumber($NicNumber)
    {
        $this->NicNumber = $NicNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNotes()
    {
        return $this->Notes;
    }

    /**
     * @param mixed $Notes
     *
     * @return self
     */
    public function setNotes($Notes)
    {
        $this->Notes = $Notes;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param mixed $Phone
     *
     * @return self
     */
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhoneExtension()
    {
        return $this->PhoneExtension;
    }

    /**
     * @param mixed $PhoneExtension
     *
     * @return self
     */
    public function setPhoneExtension($PhoneExtension)
    {
        $this->PhoneExtension = $PhoneExtension;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPostcode()
    {
        return $this->Postcode;
    }

    /**
     * @param mixed $Postcode
     *
     * @return self
     */
    public function setPostcode($Postcode)
    {
        $this->Postcode = $Postcode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param mixed $State
     *
     * @return self
     */
    public function setState($State)
    {
        $this->State = $State;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStateDescription()
    {
        return $this->StateDescription;
    }

    /**
     * @param mixed $StateDescription
     *
     * @return self
     */
    public function setStateDescription($StateDescription)
    {
        $this->StateDescription = $StateDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param mixed $Type
     *
     * @return self
     */
    public function setType($Type)
    {
        $this->Type = $Type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getWarehouse()
    {
        return $this->Warehouse;
    }

    /**
     * @param mixed $Warehouse
     *
     * @return self
     */
    public function setWarehouse($Warehouse)
    {
        $this->Warehouse = $Warehouse;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getWarehouseCode()
    {
        return $this->WarehouseCode;
    }

    /**
     * @param mixed $WarehouseCode
     *
     * @return self
     */
    public function setWarehouseCode($WarehouseCode)
    {
        $this->WarehouseCode = $WarehouseCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getWarehouseDescription()
    {
        return $this->WarehouseDescription;
    }

    /**
     * @param mixed $WarehouseDescription
     *
     * @return self
     */
    public function setWarehouseDescription($WarehouseDescription)
    {
        $this->WarehouseDescription = $WarehouseDescription;

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
