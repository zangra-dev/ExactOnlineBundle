<?php
declare(strict_types=1);

namespace aibianchi\ExactOnlineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
  * @author Bianchi Jefferson <Jefferson@aibianchi.com>
 */

/**
 * @ORM\Table(name="exact")
 * @ORM\Entity(repositoryClass="aibianchi\ExactOnlineBundle\Repository\ExactRepository")
 */
class Exact
{

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var text $accessToken
     *
     * @ORM\Column(name="access_token", type="text")
     */
	private $accessToken;

    /**
     * @var text $code
     *
     * @ORM\Column(name="code", type="text")
     */
    private $code;

    /**
     * @var integer $tokenExpires
     *
     * @ORM\Column(name="token_expires", type="integer")
     */
    private $tokenExpires;

    /**
     * @var text $refreshToken
     *
     * @ORM\Column(name="refresh_token", type="text")
     */
    private $refreshToken;


    /**
     * @var boolean $enabled
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;

     /**
     * @var datetime $createdAt
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var text $country
     *
     * @ORM\Column(name="country", type="text")
     */
    private $country;


    public function __construct()
    {
        $this->enabled   = true;
        $this->createdAt = new \DateTime('now');

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }



    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }


    /**
     * @return mixed
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @param mixed $accessToken
     *
     * @return self
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTokenExpires()
    {
        return $this->tokenExpires;
    }

    /**
     * @param mixed $tokenExpires
     *
     * @return self
     */
    public function setTokenExpires($tokenExpires)
    {
        $this->tokenExpires = $tokenExpires;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * @param mixed $refreshToken
     *
     * @return self
     */
    public function setRefreshToken($refreshToken)
    {
        $this->refreshToken = $refreshToken;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param mixed $enabled
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}

?>