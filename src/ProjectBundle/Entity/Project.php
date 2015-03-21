<?php

namespace ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 */
class Project
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $categorie;

    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $duree;

    /**
     * @var integer
     */
    private $amountRequested;

    /**
     * @var integer
     */
    private $amountWon;

    /**
     * @var \DateTime
     */
    private $endDate;

    /**
     * @var \DateTime
     */
    private $beginDate;

    /**
     * @var string
     */
    private $location;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $managers;

    /**
     * @var string
     */
    private $image;

    /**
     * @var integer
     */
    private $homepage;


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
     * Set categorie
     *
     * @param string $categorie
     * @return Project
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Project
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     * @return Project
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return integer 
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set amountRequested
     *
     * @param integer $amountRequested
     * @return Project
     */
    public function setAmountRequested($amountRequested)
    {
        $this->amountRequested = $amountRequested;

        return $this;
    }

    /**
     * Get amountRequested
     *
     * @return integer 
     */
    public function getAmountRequested()
    {
        return $this->amountRequested;
    }

    /**
     * Set amountWon
     *
     * @param integer $amountWon
     * @return Project
     */
    public function setAmountWon($amountWon)
    {
        $this->amountWon = $amountWon;

        return $this;
    }

    /**
     * Get amountWon
     *
     * @return integer 
     */
    public function getAmountWon()
    {
        return $this->amountWon;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Project
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set beginDate
     *
     * @param \DateTime $beginDate
     * @return Project
     */
    public function setBeginDate($beginDate)
    {
        $this->beginDate = $beginDate;

        return $this;
    }

    /**
     * Get beginDate
     *
     * @return \DateTime 
     */
    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return Project
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
     * Set description
     *
     * @param string $description
     * @return Project
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
     * Set managers
     *
     * @param string $managers
     * @return Project
     */
    public function setManagers($managers)
    {
        $this->managers = $managers;

        return $this;
    }

    /**
     * Get managers
     *
     * @return string 
     */
    public function getManagers()
    {
        return $this->managers;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Project
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set homepage
     *
     * @param integer $homepage
     * @return Project
     */
    public function setHomepage($homepage)
    {
        $this->homepage = $homepage;

        return $this;
    }

    /**
     * Get homepage
     *
     * @return integer 
     */
    public function getHomepage()
    {
        return $this->homepage;
    }
}
