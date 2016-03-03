<?php
// src/SPBundle/Entity/User.php

namespace SPBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="Profile", mappedBy="fighter")
     */
    protected $profile;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set profile
     *
     * @param \SPBundle\Entity\Profile $profile
     * @return User
     */
    public function setProfile(\SPBundle\Entity\Profile $profile = null)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return \SPBundle\Entity\Profile 
     */
    public function getProfile()
    {
        return $this->profile;
    }
}
