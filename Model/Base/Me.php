<?php

namespace aibianchi\ExactOnlineBundle\Model\Base;


use aibianchi\ExactOnlineBundle\Model\Base\Model;
use aibianchi\ExactOnlineBundle\DAO\Connection;

/**
 * Class Me extends Model
 *
 * @package aibianchi\ExactOnlineBundle\Model
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SystemSystemMe
 *
 * @property string   $UserID Primary key
 * @property int  $CurrentDivision Division number that is currently used in the API. You should use a division number in the url
 * @property string   $DivisionCustomer Owner account of the division
 * @property string $DivisionCustomerCode Owner account code of the division
 * @property string $DivisionCustomerName Owner account name of the division
 * @property string $Email Email address of the user
 * @property string   $EmployeeID Employee ID
 * @property string $FirstName First name
 * @property string $FullName Full name of the user
 * @property string $Gender Gender: M=Male, V=Female, O=Unknown
 * @property string $Initials Initials
 * @property string $Language Language spoken by this user
 * @property string $LanguageCode Language (culture) that is used in Exact Online
 * @property string $LastName Last name
 * @property int  $Legislation Legislation
 * @property string $MiddleName Middle name
 * @property string $Mobile Mobile phone
 * @property string $Nationality Nationality
 * @property string $Phone Phone number
 * @property string $PhoneExtension Phone number extension
 * @property string $PictureUrl Url that can be used to retrieve the picture of the user
 * @property string $ServerTime The current date and time in Exact Online
 * @property float $ServerUtcOffset The time difference with UTC in seconds
 * @property string $ThumbnailPicture Binary thumbnail picture of this user
 * @property string $ThumbnailPictureFormat File type of the picture
 * @property string $Title Title
 * @property string $UserName Login name of the user
 */
class Me extends Model
{
    /**
     * @var string Name of the primary key for this model
     */
        protected $primaryKey = 'UserID';
        protected $UserID;
        protected $CurrentDivision;
        protected $DivisionCustomer;
        protected $DivisionCustomerCode;
        protected $DivisionCustomerName;
        protected $Email;
        protected $EmployeeID;
        protected $FirstName;
        protected $FullName;
        protected $Gender;
        protected $Initials;
        protected $Language;
        protected $LanguageCode;
        protected $LastName;
        protected $Legislation;
        protected $MiddleName;
        protected $Mobile;
        protected $Nationality;
        protected $Phone;
        protected $PhoneExtension;
        protected $PictureUrl;
        protected $ServerTime;
        protected $ServerUtcOffset;
        protected $ThumbnailPicture;
        protected $ThumbnailPictureFormat;
        protected $Title;
        protected $UserName;
        protected $url = 'current/Me';


    public function __construct(){

         $data =  Connection::Request($this->getUrl(), "GET");
         foreach ($data as $keyD => $item){

                $setter = "set".$keyD;
                if(method_exists($this, $setter)){
                    $this->$setter($item);
                }     
        }
    }

    /**
     * @return string Name of the primary key for this model
     */
    public function getPrimaryKey()
    {
        return $this->primaryKey;
    }

    /**
     * @param string Name of the primary key for this model $primaryKey
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
    public function getCurrentDivision()
    {
        return $this->CurrentDivision;
    }

    /**
     * @param mixed $CurrentDivision
     *
     * @return self
     */
    public function setCurrentDivision($CurrentDivision)
    {
        $this->CurrentDivision = $CurrentDivision;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDivisionCustomer()
    {
        return $this->DivisionCustomer;
    }

    /**
     * @param mixed $DivisionCustomer
     *
     * @return self
     */
    public function setDivisionCustomer($DivisionCustomer)
    {
        $this->DivisionCustomer = $DivisionCustomer;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDivisionCustomerCode()
    {
        return $this->DivisionCustomerCode;
    }

    /**
     * @param mixed $DivisionCustomerCode
     *
     * @return self
     */
    public function setDivisionCustomerCode($DivisionCustomerCode)
    {
        $this->DivisionCustomerCode = $DivisionCustomerCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDivisionCustomerName()
    {
        return $this->DivisionCustomerName;
    }

    /**
     * @param mixed $DivisionCustomerName
     *
     * @return self
     */
    public function setDivisionCustomerName($DivisionCustomerName)
    {
        $this->DivisionCustomerName = $DivisionCustomerName;

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
    public function getEmployeeID()
    {
        return $this->EmployeeID;
    }

    /**
     * @param mixed $EmployeeID
     *
     * @return self
     */
    public function setEmployeeID($EmployeeID)
    {
        $this->EmployeeID = $EmployeeID;

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
    public function getLanguageCode()
    {
        return $this->LanguageCode;
    }

    /**
     * @param mixed $LanguageCode
     *
     * @return self
     */
    public function setLanguageCode($LanguageCode)
    {
        $this->LanguageCode = $LanguageCode;

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
    public function getLegislation()
    {
        return $this->Legislation;
    }

    /**
     * @param mixed $Legislation
     *
     * @return self
     */
    public function setLegislation($Legislation)
    {
        $this->Legislation = $Legislation;

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
    public function getServerTime()
    {
        return $this->ServerTime;
    }

    /**
     * @param mixed $ServerTime
     *
     * @return self
     */
    public function setServerTime($ServerTime)
    {
        $this->ServerTime = $ServerTime;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getServerUtcOffset()
    {
        return $this->ServerUtcOffset;
    }

    /**
     * @param mixed $ServerUtcOffset
     *
     * @return self
     */
    public function setServerUtcOffset($ServerUtcOffset)
    {
        $this->ServerUtcOffset = $ServerUtcOffset;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getThumbnailPicture()
    {
        return $this->ThumbnailPicture;
    }

    /**
     * @param mixed $ThumbnailPicture
     *
     * @return self
     */
    public function setThumbnailPicture($ThumbnailPicture)
    {
        $this->ThumbnailPicture = $ThumbnailPicture;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getThumbnailPictureFormat()
    {
        return $this->ThumbnailPictureFormat;
    }

    /**
     * @param mixed $ThumbnailPictureFormat
     *
     * @return self
     */
    public function setThumbnailPictureFormat($ThumbnailPictureFormat)
    {
        $this->ThumbnailPictureFormat = $ThumbnailPictureFormat;

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