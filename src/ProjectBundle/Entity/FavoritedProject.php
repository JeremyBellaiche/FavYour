<?php

namespace ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/* COMMENTAIRE : 

MANY TO ONE ?
ONE TO MANY ?

Relation user_id 
Relation project_id
*/


/**
 * favoritedProject
 *
 * @ORM\Table(name="favoritedProject")
 * @ORM\Entity
 */
class FavoritedProject
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
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="project_id", type="integer")
     */
    private $projectId;

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
     * Set userId
     *
     * @param \integer $userId
     * @return FavoritedProject
     */
    public function setUserId(\integer $userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return \integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set projectId
     *
     * @param integer $projectId
     * @return FavoritedProject
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * Get projectId
     *
     * @return integer 
     */
    public function getProjectId()
    {
        return $this->projectId;
    }
}
