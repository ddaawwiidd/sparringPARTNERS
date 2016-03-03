<?php

namespace SPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profile
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SPBundle\Entity\ProfileRepository")
 */
class Profile
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=100)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="secondName", type="string", length=100)
     */
    private $secondName;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="sex", type="string", length=10)
     */
    private $sex;

    /**
     * @var integer
     *
     * @ORM\Column(name="weight", type="integer")
     */
    private $weight;

    /**
     * @var integer
     *
     * @ORM\Column(name="height", type="integer")
     */
    private $height;

    /**
     * @var string
     *
     * @ORM\Column(name="belt", type="string", length=100)
     */
    private $belt;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255)
     */
    private $location;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sparringMode", type="boolean")
     */
    private $sparringMode;

    /**
     * @ORM\OneToOne(targetEntity="User", inversedBy="profile")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $fighter;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Profile
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set secondName
     *
     * @param string $secondName
     * @return Profile
     */
    public function setSecondName($secondName)
    {
        $this->secondName = $secondName;

        return $this;
    }

    /**
     * Get secondName
     *
     * @return string 
     */
    public function getSecondName()
    {
        return $this->secondName;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Profile
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set sex
     *
     * @param string $sex
     * @return Profile
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string 
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     * @return Profile
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return integer 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set height
     *
     * @param integer $height
     * @return Profile
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer 
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set belt
     *
     * @param string $belt
     * @return Profile
     */
    public function setBelt($belt)
    {
        $this->belt = $belt;

        return $this;
    }

    /**
     * Get belt
     *
     * @return string 
     */
    public function getBelt()
    {
        return $this->belt;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return Profile
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set fighter
     *
     * @param \SPBundle\Entity\User $fighter
     * @return Profile
     */
    public function setFighter(\SPBundle\Entity\User $fighter = null)
    {
        $this->fighter = $fighter;

        return $this;
    }

    /**
     * Get fighter
     *
     * @return \SPBundle\Entity\User 
     */
    public function getFighter()
    {
        return $this->fighter;
    }

    /**
     * Set sparringMode
     *
     * @param boolean $sparringMode
     * @return Profile
     */
    public function setSparringMode($sparringMode)
    {
        $this->sparringMode = $sparringMode;

        return $this;
    }

    /**
     * Get sparringMode
     *
     * @return boolean 
     */
    public function getSparringMode()
    {
        return $this->sparringMode;
    }
}
