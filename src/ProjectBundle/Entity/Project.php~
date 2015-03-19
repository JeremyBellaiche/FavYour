<?php

namespace ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * project
 *
 * @ORM\Table(name="projects")
 * @ORM\Entity
 */
class Project
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="amount_requested", type="integer")
     */
    private $amountRequested;

    /**
     * @var integer
     *
     * @ORM\Column(name="amount_won", type="integer")
     */
    private $amountWon;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime")
     */
    private $endDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="begin_date", type="datetime")
     */
    private $beginDate;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="managers", type="text")
     */
    private $managers;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="homepage", type="integer", scale=1, options={"default" = 0})
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
}
