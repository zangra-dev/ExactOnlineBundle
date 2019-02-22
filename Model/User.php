<?php

namespace aibianchi\ExactOnlineBundle\Model; 

use aibianchi\ExactOnlineBundle\Model\Base\Model;
/**
 * Class User extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=UsersUsers
 *
 * @property string $UserID Primary key
 * @property string $BirthDate Birth date
 * @property string $BirthName Birth name
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property string $Customer Customer the user belongs to
 * @property string $CustomerName Name of Customer
 * @property string $Email Email address of the user
 * @property string $EndDate Date after which the user login is disabled. NULL means no enddate
 * @property string $FirstName First name
 * @property string $FullName Full name of the user
 * @property string $Gender Gender: M=Male, V=Female, O=Unknown
 * @property bool $HasRegisteredForTwoStepVerification User has completed registration of Two-Step verification
 * @property bool $HasTwoStepVerification User must use Two-Step verification to log in
 * @property string $Initials Initials
 * @property int $IsAnonymised Indicates whether the user is anonymised.
 * @property string $Language Language (culture) that is used in Exact Online
 * @property string $LastLogin The last time this user logged in
 * @property string $LastName Last name
 * @property string $MiddleName Middle name
 * @property string $Mobile Mobile phone
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of the last modifier
 * @property string $ModifierFullName Name of the last modifier
 * @property string $Nationality Nationality
 * @property string $Notes Remarks
 * @property string $Phone Phone number
 * @property string $PhoneExtension Phone number extension
 * @property string $ProfileCode Profile code
 * @property string $StartDate Startdate after which the login is allowed. If the start date is NULL the login is allowed as well
 * @property int $StartDivision Start Division
 * @property string $Title Title
 * @property string $UserName Login name of the user
 * @property UserRoles $UserRoles Collection of user roles
 * @property UserRolesPerDivision $UserRolesPerDivision Collection of user roles per division
 * @property string $UserTypesList Obsolete
 */
class User extends Model 
{

        protected $primaryKey = 'UserID';
        protected $UserID;
        protected $BirthDate;
        protected $BirthName;
        protected $Created;
        protected $Creator;
        protected $CreatorFullName;
        protected $Customer;
        protected $CustomerName;
        protected $Email;
        protected $EndDate;
        protected $FirstName;
        protected $FullName;
        protected $Gender;
        protected $HasRegisteredForTwoStepVerification;
        protected $HasTwoStepVerification;
        protected $Initials;
        protected $IsAnonymised;
        protected $Language;
        protected $LastLogin;
        protected $LastName;
        protected $MiddleName;
        protected $Mobile;
        protected $Modified;
        protected $Modifier;
        protected $ModifierFullName;
        protected $Nationality;
        protected $Notes;
        protected $Phone;
        protected $PhoneExtension;
        protected $ProfileCode;
        protected $StartDate;
        protected $StartDivision;
        protected $Title;
        protected $UserName;
        protected $UserRoles;
        protected $UserRolesPerDivision;
        protected $UserTypesList;
        protected $url = 'users/Users';


    /**
     * @return mixed
     */
    public function getPrimaryKey()
    {
        return $this->primaryKey;
    }

    /**
     * @param mixed $primaryKey
     *
     * @return self
     */
    public function setPrimaryKey($primaryKey)
    {
        $this->primaryKey = $primaryKey;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserID()
    {
        return $this->UserID;
    }

    /**
     * @param mixed $UserID
     *
     * @return self
     */
    public function setUserID($UserID)
    {
        $this->UserID = $UserID;

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
    public function getCustomerName()
    {
        return $this->CustomerName;
    }

    /**
     * @param mixed $CustomerName
     *
     * @return self
     */
    public function setCustomerName($CustomerName)
    {
        $this->CustomerName = $CustomerName;

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
    public function getHasRegisteredForTwoStepVerification()
    {
        return $this->HasRegisteredForTwoStepVerification;
    }

    /**
     * @param mixed $HasRegisteredForTwoStepVerification
     *
     * @return self
     */
    public function setHasRegisteredForTwoStepVerification($HasRegisteredForTwoStepVerification)
    {
        $this->HasRegisteredForTwoStepVerification = $HasRegisteredForTwoStepVerification;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHasTwoStepVerification()
    {
        return $this->HasTwoStepVerification;
    }

    /**
     * @param mixed $HasTwoStepVerification
     *
     * @return self
     */
    public function setHasTwoStepVerification($HasTwoStepVerification)
    {
        $this->HasTwoStepVerification = $HasTwoStepVerification;

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
    public function getLastLogin()
    {
        return $this->LastLogin;
    }

    /**
     * @param mixed $LastLogin
     *
     * @return self
     */
    public function setLastLogin($LastLogin)
    {
        $this->LastLogin = $LastLogin;

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
    public function getProfileCode()
    {
        return $this->ProfileCode;
    }

    /**
     * @param mixed $ProfileCode
     *
     * @return self
     */
    public function setProfileCode($ProfileCode)
    {
        $this->ProfileCode = $ProfileCode;

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
    public function getStartDivision()
    {
        return $this->StartDivision;
    }

    /**
     * @param mixed $StartDivision
     *
     * @return self
     */
    public function setStartDivision($StartDivision)
    {
        $this->StartDivision = $StartDivision;

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
    public function getUserName()
    {
        return $this->UserName;
    }

    /**
     * @param mixed $UserName
     *
     * @return self
     */
    public function setUserName($UserName)
    {
        $this->UserName = $UserName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserRoles()
    {
        return $this->UserRoles;
    }

    /**
     * @param mixed $UserRoles
     *
     * @return self
     */
    public function setUserRoles($UserRoles)
    {
        $this->UserRoles = $UserRoles;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserRolesPerDivision()
    {
        return $this->UserRolesPerDivision;
    }

    /**
     * @param mixed $UserRolesPerDivision
     *
     * @return self
     */
    public function setUserRolesPerDivision($UserRolesPerDivision)
    {
        $this->UserRolesPerDivision = $UserRolesPerDivision;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserTypesList()
    {
        return $this->UserTypesList;
    }

    /**
     * @param mixed $UserTypesList
     *
     * @return self
     */
    public function setUserTypesList($UserTypesList)
    {
        $this->UserTypesList = $UserTypesList;

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
