<?php
/***
 * User: Driky
 * Date: 26/03/2016
 * Time: 23:12
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Light_Novel_Person_Role
 *
 * @ORM\Table(name="light_novel_person_role")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Light_Novel_Person_RoleRepository")
 */
class Light_Novel_Person_Role
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Light_Novel", inversedBy="Light_Novel_Person_Role")
     * @ORM\JoinColumn(name="light_novel_id", referencedColumnName="id", nullable=false)
     */
    private $light_novel_id;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Person", inversedBy="Light_Novel_Person_Role")
     * @ORM\JoinColumn(name="person_id", referencedColumnName="id", nullable=false)
     */
    private $person_id;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Role", inversedBy="Light_Novel_Person_Role")
     * @ORM\JoinColumn(name="role_id", referencedColumnName="id", nullable=false)
     */
    private $role_id;


    /**
     * Set lightNovelId
     *
     * @param \AppBundle\Entity\Light_Novel $lightNovelId
     *
     * @return Light_Novel_Person_Role
     */
    public function setLightNovelId(\AppBundle\Entity\Light_Novel $lightNovelId)
    {
        $this->light_novel_id = $lightNovelId;

        return $this;
    }

    /**
     * Get lightNovelId
     *
     * @return \AppBundle\Entity\Light_Novel
     */
    public function getLightNovelId()
    {
        return $this->light_novel_id;
    }

    /**
     * Set personId
     *
     * @param \AppBundle\Entity\Person $personId
     *
     * @return Light_Novel_Person_Role
     */
    public function setPersonId(\AppBundle\Entity\Person $personId)
    {
        $this->person_id = $personId;

        return $this;
    }

    /**
     * Get personId
     *
     * @return \AppBundle\Entity\Person
     */
    public function getPersonId()
    {
        return $this->person_id;
    }

    /**
     * Set roleId
     *
     * @param \AppBundle\Entity\Role $roleId
     *
     * @return Light_Novel_Person_Role
     */
    public function setRoleId(\AppBundle\Entity\Role $roleId)
    {
        $this->role_id = $roleId;

        return $this;
    }

    /**
     * Get roleId
     *
     * @return \AppBundle\Entity\Role
     */
    public function getRoleId()
    {
        return $this->role_id;
    }
}
