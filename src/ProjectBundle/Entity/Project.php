<?php

namespace ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     *@Assert\NotBlank()
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
     * @Assert\Length(min=280)
     */
    private $description;

    /**
     * @var string
     */
    private $managers;

    /**
    * @ORM\OneToOne(targetEntity="ProjectBundle\Entity\Image", cascade={"persist"})
    */
     private $image;


    /**
     * @var integer
     */
    private $author;


    /**
     * @var integer
     */
    private $homepage;

    /**
     * @var integer
     */
    private $pushers;



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
    public function setImage(Image $image = null)
    {
    $this->image = $image;
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

    // TEST

    /**
     * Set author
     *
     * @param integer $author
     * @return Project
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return integer 
     */
    public function getAuthor()
    {
        return $this->author;
    }


    /**
     * Set pushers
     *
     * @param integer $pushers
     * @return Project
     */
    public function setPushers($pushers)
    {
        $this->pushers = $pushers;

        return $this;
    }

    /**
     * Get pushers
     *
     * @return integer 
     */
    public function getPushers()
    {
        return $this->pushers;
    }


    /**
     * @var string
     */
    private $titreRecompense1;

    /**
     * @var string
     */
    private $descriptionRecompense1;


    /**
     * Set titreRecompense1
     *
     * @param string $titreRecompense1
     * @return Project
     */
    public function setTitreRecompense1($titreRecompense1)
    {
        $this->titreRecompense1 = $titreRecompense1;

        return $this;
    }

    /**
     * Get titreRecompense1
     *
     * @return string 
     */
    public function getTitreRecompense1()
    {
        return $this->titreRecompense1;
    }

    /**
     * Set descriptionRecompense1
     *
     * @param string $descriptionRecompense1
     * @return Project
     */
    public function setDescriptionRecompense1($descriptionRecompense1)
    {
        $this->descriptionRecompense1 = $descriptionRecompense1;

        return $this;
    }

    /**
     * Get descriptionRecompense1
     *
     * @return string 
     */
    public function getDescriptionRecompense1()
    {
        return $this->descriptionRecompense1;
    }
    /**
     * @var string
     */
    private $titreRecompense2;

    /**
     * @var string
     */
    private $descriptionRecompense2;

    /**
     * @var string
     */
    private $titreRecompense3;

    /**
     * @var string
     */
    private $descriptionRecompense3;

    /**
     * @var string
     */
    private $titreRecompense4;

    /**
     * @var string
     */
    private $descriptionRecompense4;

    /**
     * @var string
     */
    private $titreRecompense5;

    /**
     * @var string
     */
    private $descriptionRecompense5;

     /**
     * @var integer
     */
    private $active = 1;



    /**
     * Set titreRecompense2
     *
     * @param string $titreRecompense2
     * @return Project
     */
    public function setTitreRecompense2($titreRecompense2)
    {
        $this->titreRecompense2 = $titreRecompense2;

        return $this;
    }

    /**
     * Get titreRecompense2
     *
     * @return string 
     */
    public function getTitreRecompense2()
    {
        return $this->titreRecompense2;
    }

    /**
     * Set descriptionRecompense2
     *
     * @param string $descriptionRecompense2
     * @return Project
     */
    public function setDescriptionRecompense2($descriptionRecompense2)
    {
        $this->descriptionRecompense2 = $descriptionRecompense2;

        return $this;
    }

    /**
     * Get descriptionRecompense2
     *
     * @return string 
     */
    public function getDescriptionRecompense2()
    {
        return $this->descriptionRecompense2;
    }

    /**
     * Set titreRecompense3
     *
     * @param string $titreRecompense3
     * @return Project
     */
    public function setTitreRecompense3($titreRecompense3)
    {
        $this->titreRecompense3 = $titreRecompense3;

        return $this;
    }

    /**
     * Get titreRecompense3
     *
     * @return string 
     */
    public function getTitreRecompense3()
    {
        return $this->titreRecompense3;
    }

    /**
     * Set descriptionRecompense3
     *
     * @param string $descriptionRecompense3
     * @return Project
     */
    public function setDescriptionRecompense3($descriptionRecompense3)
    {
        $this->descriptionRecompense3 = $descriptionRecompense3;

        return $this;
    }

    /**
     * Get descriptionRecompense3
     *
     * @return string 
     */
    public function getDescriptionRecompense3()
    {
        return $this->descriptionRecompense3;
    }

    /**
     * Set titreRecompense4
     *
     * @param string $titreRecompense4
     * @return Project
     */
    public function setTitreRecompense4($titreRecompense4)
    {
        $this->titreRecompense4 = $titreRecompense4;

        return $this;
    }

    /**
     * Get titreRecompense4
     *
     * @return string 
     */
    public function getTitreRecompense4()
    {
        return $this->titreRecompense4;
    }

    /**
     * Set descriptionRecompense4
     *
     * @param string $descriptionRecompense4
     * @return Project
     */
    public function setDescriptionRecompense4($descriptionRecompense4)
    {
        $this->descriptionRecompense4 = $descriptionRecompense4;

        return $this;
    }

    /**
     * Get descriptionRecompense4
     *
     * @return string 
     */
    public function getDescriptionRecompense4()
    {
        return $this->descriptionRecompense4;
    }

    /**
     * Set titreRecompense5
     *
     * @param string $titreRecompense5
     * @return Project
     */
    public function setTitreRecompense5($titreRecompense5)
    {
        $this->titreRecompense5 = $titreRecompense5;

        return $this;
    }

    /**
     * Get titreRecompense5
     *
     * @return string 
     */
    public function getTitreRecompense5()
    {
        return $this->titreRecompense5;
    }

    /**
     * Set descriptionRecompense5
     *
     * @param string $descriptionRecompense5
     * @return Project
     */
    public function setDescriptionRecompense5($descriptionRecompense5)
    {
        $this->descriptionRecompense5 = $descriptionRecompense5;

        return $this;
    }

    /**
     * Get descriptionRecompense5
     *
     * @return string 
     */
    public function getDescriptionRecompense5()
    {
        return $this->descriptionRecompense5;
    }
   


    /**
     * Set active
     *
     * @param integer $active
     * @return Project
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return integer 
     */
    public function getActive()
    {
        return $this->active;
    }


    




    //IMAGE

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $path;

    public function getAbsolutePath()
    {
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path ? null : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__.'/../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return 'uploads/documents';
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Project
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }


    /**
     * @Assert\File(maxSize="6000000")
     */
    public $file;

    

    public function upload()
    {
        // la propriété « file » peut être vide si le champ n'est pas requis
        if (null === $this->file) {
            return;
        }

        // utilisez le nom de fichier original ici mais
        // vous devriez « l'assainir » pour au moins éviter
        // quelconques problèmes de sécurité

        // la méthode « move » prend comme arguments le répertoire cible et
        // le nom de fichier cible où le fichier doit être déplacé
        $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());

        // définit la propriété « path » comme étant le nom de fichier où vous
        // avez stocké le fichier
        $this->path = $this->file->getClientOriginalName();

        // « nettoie » la propriété « file » comme vous n'en aurez plus besoin
        $this->file = null;
    }
}
