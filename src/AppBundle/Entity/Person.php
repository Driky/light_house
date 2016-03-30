<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table(name="person")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PersonRepository")
 */
class Person
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
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=100, nullable=true)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="nickname", type="string", length=100, nullable=true)
     */
    private $nickname;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birth_date", type="date", nullable=true)
     */
    private $birthDate;

    /**
     * @ORM\OneToMany(targetEntity="Light_Novel_Person_Role", mappedBy="Person")
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
     * Set name
     *
     * @param string $name
     *
     * @return Person
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return Person
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set nickname
     *
     * @param string $nickname
     *
     * @return Person
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return Person
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
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
     * @return Person
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
