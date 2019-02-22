<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class Contact extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=crmContacts
 *
 * @property string $ID Primary key
 * @property string $Account The account to which the contact belongs
 * @property bool $AccountIsCustomer Indicates if account is a customer
 * @property bool $AccountIsSupplier Indicates if account is a supplier
 * @property string $AccountMainContact Reference to the main contact of the account
 * @property string $AccountName Name of the account
 * @property string $AddressLine2 Second address line
 * @property string $AddressStreet Street name of the address
 * @property string $AddressStreetNumber Street number of the address
 * @property string $AddressStreetNumberSuffix Street number suffix of the address
 * @property int $AllowMailing Obsolete
 * @property string $BirthDate Birth date
 * @property string $BirthName Last birth name
 * @property string $BirthNamePrefix Middle birth name
 * @property string $BirthPlace Birth place
 * @property string $BusinessEmail Email address of the contact
 * @property string $BusinessFax Fax of the contact
 * @property string $BusinessMobile Mobile of the contact
 * @property string $BusinessPhone Phone of the contact
 * @property string $BusinessPhoneExtension Phone extension of the contact
 * @property string $City City
 * @property string $Code Code of the account
 * @property string $Country Country code
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property int $Division Division code
 * @property string $Email Email address of the contact
 * @property string $EndDate End date
 * @property string $FirstName First name. Provide at least first name or last name to create a new contact
 * @property string $FullName Full name (First name Middle name Last name)
 * @property string $Gender Gender: M=Male, V=Female, O=Unknown
 * @property int $HID Contact ID
 * @property string $IdentificationDate Identification date
 * @property string $IdentificationDocument Reference to the identification document of the contact
 * @property string $IdentificationUser Reference to the user responsible for identification
 * @property string $Initials Initials
 * @property bool $IsMailingExcluded Indicates whether contacts are excluded from the marketing list
 * @property bool $IsMainContact Indicates if this is the main contact of the linked account
 * @property string $JobTitleDescription Jobtitle of the contact
 * @property string $Language Language code
 * @property string $LastName Last name. Provide at least first name or last name to create a new contact
 * @property string $MarketingNotes The user should be able to do a full text search on these notes to gather contacts for a marketing campaign
 * @property string $MiddleName Middle name
 * @property string $Mobile Business phone of the contact
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of the last modifier
 * @property string $Nationality Nationality
 * @property string $Notes Extra remarks
 * @property string $PartnerName Last name of partner
 * @property string $PartnerNamePrefix Middlename of partner
 * @property string $Person Reference to the personal information of this contact such as name, gender, address etc.
 * @property string $Phone Phone of the contact
 * @property string $PhoneExtension Phone extension of the contact
 * @property string $Picture This field is write-only. The picture can be downloaded through PictureUrl and PictureThumbnailUrl.
 * @property string $PictureName Filename of the picture
 * @property string $PictureThumbnailUrl Url to retrieve the picture thumbnail
 * @property string $PictureUrl Url to retrieve the picture
 * @property string $Postcode Postcode
 * @property string $SocialSecurityNumber Social security number
 * @property string $StartDate Start date
 * @property string $State State
 * @property string $Title Title
 *
 * Note: Due to the way Storable is setup and the way the Exact Online API works certain fields overwrite
 * each other. For example: If you fill the BusinessEmail but not the Email field the latter will overwrite
 * the first. This also applies to the BusinessMobile and Mobile field and the BusinessPhone and Phone field.
 * It is best practice to use the 'main' fields (Email, Mobile and Phone).
 */
class Contact extends Model 
{
        protected $ID;
        protected $Account;
        protected $AccountIsCustomer;
        protected $AccountIsSupplier;
        protected $AccountMainContact;
        protected $AccountName;
        protected $AddressLine2;
        protected $AddressStreet;
        protected $AddressStreetNumber;
        protected $AddressStreetNumberSuffix;
        protected $AllowMailing;
        protected $BirthDate;
        protected $BirthName;
        protected $BirthNamePrefix;
        protected $BirthPlace;
        protected $BusinessEmail;
        protected $BusinessFax;
        protected $BusinessMobile;
        protected $BusinessPhone;
        protected $BusinessPhoneExtension;
        protected $City;
        protected $Code;
        protected $Country;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Division;
        protected $Email;
        protected $EndDate;
        protected $FirstName;
        protected $FullName;
        protected $Gender;
        protected $HID;
        protected $IdentificationDate;
        protected $IdentificationDocument;
        protected $IdentificationUser;
        protected $Initials;
        protected $IsMailingExcluded;
        protected $IsMainContact;
        protected $JobTitleDescription;
        protected $Language;
        protected $LastName;
        protected $MarketingNotes;
        protected $MiddleName;
        protected $Mobile;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $Nationality;
        protected $Notes;
        protected $PartnerName;
        protected $PartnerNamePrefix;
        protected $Person;
        protected $Phone;
        protected $PhoneExtension;
        protected $Picture;
        protected $PictureName;
        protected $PictureThumbnailUrl;
        protected $PictureUrl;
        protected $Postcode;
        protected $SocialSecurityNumber;
        protected $StartDate;
        protected $State;
        protected $Title;
        protected $url = 'crm/Contacts';

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
    public function getAccountIsCustomer()
    {
        return $this->AccountIsCustomer;
    }

    /**
     * @param mixed $AccountIsCustomer
     *
     * @return self
     */
    public function setAccountIsCustomer($AccountIsCustomer)
    {
        $this->AccountIsCustomer = $AccountIsCustomer;

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
    public function getAccountMainContact()
    {
        return $this->AccountMainContact;
    }

    /**
     * @param mixed $AccountMainContact
     *
     * @return self
     */
    public function setAccountMainContact($AccountMainContact)
    {
        $this->AccountMainContact = $AccountMainContact;

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
    public function getAddressStreet()
    {
        return $this->AddressStreet;
    }

    /**
     * @param mixed $AddressStreet
     *
     * @return self
     */
    public function setAddressStreet($AddressStreet)
    {
        $this->AddressStreet = $AddressStreet;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddressStreetNumber()
    {
        return $this->AddressStreetNumber;
    }

    /**
     * @param mixed $AddressStreetNumber
     *
     * @return self
     */
    public function setAddressStreetNumber($AddressStreetNumber)
    {
        $this->AddressStreetNumber = $AddressStreetNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddressStreetNumberSuffix()
    {
        return $this->AddressStreetNumberSuffix;
    }

    /**
     * @param mixed $AddressStreetNumberSuffix
     *
     * @return self
     */
    public function setAddressStreetNumberSuffix($AddressStreetNumberSuffix)
    {
        $this->AddressStreetNumberSuffix = $AddressStreetNumberSuffix;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAllowMailing()
    {
        return $this->AllowMailing;
    }

    /**
     * @param mixed $AllowMailing
     *
     * @return self
     */
    public function setAllowMailing($AllowMailing)
    {
        $this->AllowMailing = $AllowMailing;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBirthDate()
    {
        return $this->BirthDate;
    }

    /**
     * @param mixed $BirthDate
     *
     * @return self
     */
    public function setBirthDate($BirthDate)
    {
        $this->BirthDate = $BirthDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBirthName()
    {
        return $this->BirthName;
    }

    /**
     * @param mixed $BirthName
     *
     * @return self
     */
    public function setBirthName($BirthName)
    {
        $this->BirthName = $BirthName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBirthNamePrefix()
    {
        return $this->BirthNamePrefix;
    }

    /**
     * @param mixed $BirthNamePrefix
     *
     * @return self
     */
    public function setBirthNamePrefix($BirthNamePrefix)
    {
        $this->BirthNamePrefix = $BirthNamePrefix;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBirthPlace()
    {
        return $this->BirthPlace;
    }

    /**
     * @param mixed $BirthPlace
     *
     * @return self
     */
    public function setBirthPlace($BirthPlace)
    {
        $this->BirthPlace = $BirthPlace;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBusinessEmail()
    {
        return $this->BusinessEmail;
    }

    /**
     * @param mixed $BusinessEmail
     *
     * @return self
     */
    public function setBusinessEmail($BusinessEmail)
    {
        $this->BusinessEmail = $BusinessEmail;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBusinessFax()
    {
        return $this->BusinessFax;
    }

    /**
     * @param mixed $BusinessFax
     *
     * @return self
     */
    public function setBusinessFax($BusinessFax)
    {
        $this->BusinessFax = $BusinessFax;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBusinessMobile()
    {
        return $this->BusinessMobile;
    }

    /**
     * @param mixed $BusinessMobile
     *
     * @return self
     */
    public function setBusinessMobile($BusinessMobile)
    {
        $this->BusinessMobile = $BusinessMobile;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBusinessPhone()
    {
        return $this->BusinessPhone;
    }

    /**
     * @param mixed $BusinessPhone
     *
     * @return self
     */
    public function setBusinessPhone($BusinessPhone)
    {
        $this->BusinessPhone = $BusinessPhone;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBusinessPhoneExtension()
    {
        return $this->BusinessPhoneExtension;
    }

    /**
     * @param mixed $BusinessPhoneExtension
     *
     * @return self
     */
    public function setBusinessPhoneExtension($BusinessPhoneExtension)
    {
        $this->BusinessPhoneExtension = $BusinessPhoneExtension;

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
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param mixed $Code
     *
     * @return self
     */
    public function setCode($Code)
    {
        $this->Code = $Code;

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
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param mixed $Email
     *
     * @return self
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * @param mixed $EndDate
     *
     * @return self
     */
    public function setEndDate($EndDate)
    {
        $this->EndDate = $EndDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param mixed $FirstName
     *
     * @return self
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->FullName;
    }

    /**
     * @param mixed $FullName
     *
     * @return self
     */
    public function setFullName($FullName)
    {
        $this->FullName = $FullName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->Gender;
    }

    /**
     * @param mixed $Gender
     *
     * @return self
     */
    public function setGender($Gender)
    {
        $this->Gender = $Gender;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHID()
    {
        return $this->HID;
    }

    /**
     * @param mixed $HID
     *
     * @return self
     */
    public function setHID($HID)
    {
        $this->HID = $HID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdentificationDate()
    {
        return $this->IdentificationDate;
    }

    /**
     * @param mixed $IdentificationDate
     *
     * @return self
     */
    public function setIdentificationDate($IdentificationDate)
    {
        $this->IdentificationDate = $IdentificationDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdentificationDocument()
    {
        return $this->IdentificationDocument;
    }

    /**
     * @param mixed $IdentificationDocument
     *
     * @return self
     */
    public function setIdentificationDocument($IdentificationDocument)
    {
        $this->IdentificationDocument = $IdentificationDocument;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdentificationUser()
    {
        return $this->IdentificationUser;
    }

    /**
     * @param mixed $IdentificationUser
     *
     * @return self
     */
    public function setIdentificationUser($IdentificationUser)
    {
        $this->IdentificationUser = $IdentificationUser;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInitials()
    {
        return $this->Initials;
    }

    /**
     * @param mixed $Initials
     *
     * @return self
     */
    public function setInitials($Initials)
    {
        $this->Initials = $Initials;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsMailingExcluded()
    {
        return $this->IsMailingExcluded;
    }

    /**
     * @param mixed $IsMailingExcluded
     *
     * @return self
     */
    public function setIsMailingExcluded($IsMailingExcluded)
    {
        $this->IsMailingExcluded = $IsMailingExcluded;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsMainContact()
    {
        return $this->IsMainContact;
    }

    /**
     * @param mixed $IsMainContact
     *
     * @return self
     */
    public function setIsMainContact($IsMainContact)
    {
        $this->IsMainContact = $IsMainContact;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getJobTitleDescription()
    {
        return $this->JobTitleDescription;
    }

    /**
     * @param mixed $JobTitleDescription
     *
     * @return self
     */
    public function setJobTitleDescription($JobTitleDescription)
    {
        $this->JobTitleDescription = $JobTitleDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param mixed $Language
     *
     * @return self
     */
    public function setLanguage($Language)
    {
        $this->Language = $Language;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @param mixed $LastName
     *
     * @return self
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMarketingNotes()
    {
        return $this->MarketingNotes;
    }

    /**
     * @param mixed $MarketingNotes
     *
     * @return self
     */
    public function setMarketingNotes($MarketingNotes)
    {
        $this->MarketingNotes = $MarketingNotes;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMiddleName()
    {
        return $this->MiddleName;
    }

    /**
     * @param mixed $MiddleName
     *
     * @return self
     */
    public function setMiddleName($MiddleName)
    {
        $this->MiddleName = $MiddleName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->Mobile;
    }

    /**
     * @param mixed $Mobile
     *
     * @return self
     */
    public function setMobile($Mobile)
    {
        $this->Mobile = $Mobile;

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
    public function getNationality()
    {
        return $this->Nationality;
    }

    /**
     * @param mixed $Nationality
     *
     * @return self
     */
    public function setNationality($Nationality)
    {
        $this->Nationality = $Nationality;

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
    public function getPartnerName()
    {
        return $this->PartnerName;
    }

    /**
     * @param mixed $PartnerName
     *
     * @return self
     */
    public function setPartnerName($PartnerName)
    {
        $this->PartnerName = $PartnerName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPartnerNamePrefix()
    {
        return $this->PartnerNamePrefix;
    }

    /**
     * @param mixed $PartnerNamePrefix
     *
     * @return self
     */
    public function setPartnerNamePrefix($PartnerNamePrefix)
    {
        $this->PartnerNamePrefix = $PartnerNamePrefix;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPerson()
    {
        return $this->Person;
    }

    /**
     * @param mixed $Person
     *
     * @return self
     */
    public function setPerson($Person)
    {
        $this->Person = $Person;

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
    public function getPicture()
    {
        return $this->Picture;
    }

    /**
     * @param mixed $Picture
     *
     * @return self
     */
    public function setPicture($Picture)
    {
        $this->Picture = $Picture;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPictureName()
    {
        return $this->PictureName;
    }

    /**
     * @param mixed $PictureName
     *
     * @return self
     */
    public function setPictureName($PictureName)
    {
        $this->PictureName = $PictureName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPictureThumbnailUrl()
    {
        return $this->PictureThumbnailUrl;
    }

    /**
     * @param mixed $PictureThumbnailUrl
     *
     * @return self
     */
    public function setPictureThumbnailUrl($PictureThumbnailUrl)
    {
        $this->PictureThumbnailUrl = $PictureThumbnailUrl;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPictureUrl()
    {
        return $this->PictureUrl;
    }

    /**
     * @param mixed $PictureUrl
     *
     * @return self
     */
    public function setPictureUrl($PictureUrl)
    {
        $this->PictureUrl = $PictureUrl;

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
    public function getSocialSecurityNumber()
    {
        return $this->SocialSecurityNumber;
    }

    /**
     * @param mixed $SocialSecurityNumber
     *
     * @return self
     */
    public function setSocialSecurityNumber($SocialSecurityNumber)
    {
        $this->SocialSecurityNumber = $SocialSecurityNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param mixed $StartDate
     *
     * @return self
     */
    public function setStartDate($StartDate)
    {
        $this->StartDate = $StartDate;

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
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param mixed $Title
     *
     * @return self
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;

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
