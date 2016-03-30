<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Light_Novel
 *
 * @ORM\Table(name="light_novel")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Light_NovelRepository")
 */
class Light_Novel
{
    /**
     * @var int
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
     * @var string
     *
     * @ORM\Column(name="synopsis", type="text", nullable=true)
     */
    private $synopsis;

    /**
     * @var string
     *
     * @ORM\Column(name="original_description", type="text", nullable=true)
     */
    private $originalDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime")
     */
    private $creationDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_date", type="datetime")
     */
    private $updateDate;

    /**
     * @ORM\OneToMany(targetEntity="Light_Novel_Person_Role", mappedBy="Light_Novel")
     */
    private $light_novel_person_role;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Light_Novel
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
     * Set synopsis
     *
     * @param string $synopsis
     *
     * @return Light_Novel
     */
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Get synopsis
     *
     * @return string
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Set originalDescription
     *
     * @param string $originalDescription
     *
     * @return Light_Novel
     */
    public function setOriginalDescription($originalDescription)
    {
        $this->originalDescription = $originalDescription;

        return $this;
    }

    /**
     * Get originalDescription
     *
     * @return string
     */
    public function getOriginalDescription()
    {
        return $this->originalDescription;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return Light_Novel
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set updateDate
     *
     * @param \DateTime $updateDate
     *
     * @return Light_Novel
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->light_novel_person_role = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add lightNovelPersonRole
     *
     * @param \AppBundle\Entity\Light_Novel_Person_Role $lightNovelPersonRole
     *
     * @return Light_Novel
     */
    public function addLightNovelPersonRole(\AppBundle\Entity\Light_Novel_Person_Role $lightNovelPersonRole)
    {
        $this->light_novel_person_role[] = $lightNovelPersonRole;

        return $this;
    }

    /**
     * Remove lightNovelPersonRole
     *
     * @param \AppBundle\Entity\Light_Novel_Person_Role $lightNovelPersonRole
     */
    public function removeLightNovelPersonRole(\AppBundle\Entity\Light_Novel_Person_Role $lightNovelPersonRole)
    {
        $this->light_novel_person_role->removeElement($lightNovelPersonRole);
    }

    /**
     * Get lightNovelPersonRole
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLightNovelPersonRole()
    {
        return $this->light_novel_person_role;
    }
}
