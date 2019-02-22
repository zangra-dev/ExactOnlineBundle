<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class Employee extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PayrollEmployees
 *
 * @property string $ID Primary key
 * @property int $ActiveEmployment Obsolete
 * @property string $AddressLine2 Second address line
 * @property string $AddressLine3 Third address line
 * @property string $AddressStreet Street of address
 * @property string $AddressStreetNumber Street number of address
 * @property string $AddressStreetNumberSuffix Street number suffix of address
 * @property string $BirthDate Birth date
 * @property string $BirthName Birth name
 * @property string $BirthNamePrefix Birth middle name
 * @property string $BirthPlace Birth place
 * @property string $BusinessEmail Email of the employee at the office
 * @property string $BusinessFax Fax number of the employee at the office
 * @property string $BusinessMobile Office mobile number of the employee
 * @property string $BusinessPhone Phone number of the employee at the office
 * @property string $BusinessPhoneExtension Phone extension of the employee at the office
 * @property string $CASONumber Obsolete
 * @property string $City City
 * @property string $Code Code of the employee
 * @property string $Country Country code
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Customer Customer ID
 * @property int $Division Division code
 * @property string $Email Email address
 * @property int $EmployeeHID Employee number
 * @property string $EndDate End date of the employee
 * @property string $FirstName First name of the employee
 * @property string $FullName Full name of the employee
 * @property string $Gender Gender
 * @property int $HID Numeric ID of the employee
 * @property string $Initials Initials
 * @property bool $IsActive IsActive
 * @property int $IsAnonymised Indicates whether the employee is anonymised.
 * @property string $Language Language code
 * @property string $LastName Last name
 * @property string $LocationDescription Description of the location of the employee (where am I?)
 * @property string $Manager Direct manager of the employee
 * @property string $MaritalDate Date of marriage
 * @property int $MaritalStatus Marital status
 * @property string $MiddleName Middle name
 * @property string $Mobile Mobile phone
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Municipality Municipality
 * @property int $NameComposition 
 * @property string $Nationality Nationality
 * @property string $NickName Nick name
 * @property string $Notes Additional notes
 * @property string $PartnerName Name of partner
 * @property string $PartnerNamePrefix Middle name of partner
 * @property string $Person Reference to the persons table in which the personal data of the employee is stored
 * @property string $Phone Phone number
 * @property string $PhoneExtension Phone number extension
 * @property string $PictureFileName Filename of picture
 * @property string $PictureUrl Url of picture
 * @property string $Postcode Postcode
 * @property string $PrivateEmail Private email address
 * @property string $SocialSecurityNumber Social security number
 * @property string $StartDate Start date of the employee
 * @property string $State State
 * @property string $Title Title
 * @property string $User User ID of employee
 * @property string $UserFullName Name of user
 */
class Employee extends Model 
{
        protected $ID;
        protected $ActiveEmployment;
        protected $AddressLine2;
        protected $AddressLine3;
        protected $AddressStreet;
        protected $AddressStreetNumber;
        protected $AddressStreetNumberSuffix;
        protected $BirthDate;
        protected $BirthName;
        protected $BirthNamePrefix;
        protected $BirthPlace;
        protected $BusinessEmail;
        protected $BusinessFax;
        protected $BusinessMobile;
        protected $BusinessPhone;
        protected $BusinessPhoneExtension;
        protected $CASONumber;
        protected $City;
        protected $Code;
        protected $Country;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Customer;
        protected $Division;
        protected $Email;
        protected $EmployeeHID;
        protected $EndDate;
        protected $FirstName;
        protected $FullName;
        protected $Gender;
        protected $HID;
        protected $Initials;
        protected $IsActive;
        protected $IsAnonymised;
        protected $Language;
        protected $LastName;
        protected $LocationDescription;
        protected $Manager;
        protected $MaritalDate;
        protected $MaritalStatus;
        protected $MiddleName;
        protected $Mobile;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $Municipality;
        protected $NameComposition;
        protected $Nationality;
        protected $NickName;
        protected $Notes;
        protected $PartnerName;
        protected $PartnerNamePrefix;
        protected $Person;
        protected $Phone;
        protected $PhoneExtension;
        protected $PictureFileName;
        protected $PictureUrl;
        protected $Postcode;
        protected $PrivateEmail;
        protected $SocialSecurityNumber;
        protected $StartDate;
        protected $State;
        protected $Title;
        protected $User;
        protected $UserFullName;
        protected $url = 'payroll/Employees';

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
    public function getActiveEmployment()
    {
        return $this->ActiveEmployment;
    }

    /**
     * @param mixed $ActiveEmployment
     *
     * @return self
     */
    public function setActiveEmployment($ActiveEmployment)
    {
        $this->ActiveEmployment = $ActiveEmployment;

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
    public function getCASONumber()
    {
        return $this->CASONumber;
    }

    /**
     * @param mixed $CASONumber
     *
     * @return self
     */
    public function setCASONumber($CASONumber)
    {
        $this->CASONumber = $CASONumber;

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
    public function getCustomer()
    {
        return $this->Customer;
    }

    /**
     * @param mixed $Customer
     *
     * @return self
     */
    public function setCustomer($Customer)
    {
        $this->Customer = $Customer;

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
    public function getEmployeeHID()
    {
        return $this->EmployeeHID;
    }

    /**
     * @param mixed $EmployeeHID
     *
     * @return self
     */
    public function setEmployeeHID($EmployeeHID)
    {
        $this->EmployeeHID = $EmployeeHID;

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
    public function getIsActive()
    {
        return $this->IsActive;
    }

    /**
     * @param mixed $IsActive
     *
     * @return self
     */
    public function setIsActive($IsActive)
    {
        $this->IsActive = $IsActive;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsAnonymised()
    {
        return $this->IsAnonymised;
    }

    /**
     * @param mixed $IsAnonymised
     *
     * @return self
     */
    public function setIsAnonymised($IsAnonymised)
    {
        $this->IsAnonymised = $IsAnonymised;

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
    public function getLocationDescription()
    {
        return $this->LocationDescription;
    }

    /**
     * @param mixed $LocationDescription
     *
     * @return self
     */
    public function setLocationDescription($LocationDescription)
    {
        $this->LocationDescription = $LocationDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getManager()
    {
        return $this->Manager;
    }

    /**
     * @param mixed $Manager
     *
     * @return self
     */
    public function setManager($Manager)
    {
        $this->Manager = $Manager;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaritalDate()
    {
        return $this->MaritalDate;
    }

    /**
     * @param mixed $MaritalDate
     *
     * @return self
     */
    public function setMaritalDate($MaritalDate)
    {
        $this->MaritalDate = $MaritalDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaritalStatus()
    {
        return $this->MaritalStatus;
    }

    /**
     * @param mixed $MaritalStatus
     *
     * @return self
     */
    public function setMaritalStatus($MaritalStatus)
    {
        $this->MaritalStatus = $MaritalStatus;

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
    public function getMunicipality()
    {
        return $this->Municipality;
    }

    /**
     * @param mixed $Municipality
     *
     * @return self
     */
    public function setMunicipality($Municipality)
    {
        $this->Municipality = $Municipality;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNameComposition()
    {
        return $this->NameComposition;
    }

    /**
     * @param mixed $NameComposition
     *
     * @return self
     */
    public function setNameComposition($NameComposition)
    {
        $this->NameComposition = $NameComposition;

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
    public function getNickName()
    {
        return $this->NickName;
    }

    /**
     * @param mixed $NickName
     *
     * @return self
     */
    public function setNickName($NickName)
    {
        $this->NickName = $NickName;

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
    public function getPictureFileName()
    {
        return $this->PictureFileName;
    }

    /**
     * @param mixed $PictureFileName
     *
     * @return self
     */
    public function setPictureFileName($PictureFileName)
    {
        $this->PictureFileName = $PictureFileName;

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
    public function getPrivateEmail()
    {
        return $this->PrivateEmail;
    }

    /**
     * @param mixed $PrivateEmail
     *
     * @return self
     */
    public function setPrivateEmail($PrivateEmail)
    {
        $this->PrivateEmail = $PrivateEmail;

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
    public function getUser()
    {
        return $this->User;
    }

    /**
     * @param mixed $User
     *
     * @return self
     */
    public function setUser($User)
    {
        $this->User = $User;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserFullName()
    {
        return $this->UserFullName;
    }

    /**
     * @param mixed $UserFullName
     *
     * @return self
     */
    public function setUserFullName($UserFullName)
    {
        $this->UserFullName = $UserFullName;

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
