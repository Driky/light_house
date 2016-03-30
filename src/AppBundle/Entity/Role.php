<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RoleRepository")
 */
class Role
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
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="label", type="string", length=50, unique=true)
     */
    private $label;

    /**
     * @ORM\OneToMany(targetEntity="Light_Novel_Person_Role", mappedBy="Role")
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
     * Set label
     *
     * @param string $label
     *
     * @return Role
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
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
     * @return Role
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
