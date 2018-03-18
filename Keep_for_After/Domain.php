<?php

namespace Crowding\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domain
 *
 * @ORM\Table(name="domain", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_A7A91E0B989D9B62", columns={"slug"})}, indexes={@ORM\Index(name="IDX_A7A91E0BA76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class Domain
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255, nullable=false)
     */
    private $slug;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Crowding\ApiBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Crowding\ApiBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Crowding\ApiBundle\Entity\Lang", inversedBy="domain")
     * @ORM\JoinTable(name="domain_lang",
     *   joinColumns={
     *     @ORM\JoinColumn(name="domain_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="lang_id", referencedColumnName="code")
     *   }
     * )
     */
    private $lang;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lang = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Domain
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
     * Set description
     *
     * @param string $description
     *
     * @return Domain
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
     * Set slug
     *
     * @param string $slug
     *
     * @return Domain
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Domain
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

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
     * Set user
     *
     * @param \Crowding\ApiBundle\Entity\User $user
     *
     * @return Domain
     */
    public function setUser(\Crowding\ApiBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Crowding\ApiBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add lang
     *
     * @param \Crowding\ApiBundle\Entity\Lang $lang
     *
     * @return Domain
     */
    public function addLang(\Crowding\ApiBundle\Entity\Lang $lang)
    {
        $this->lang[] = $lang;

        return $this;
    }

    /**
     * Remove lang
     *
     * @param \Crowding\ApiBundle\Entity\Lang $lang
     */
    public function removeLang(\Crowding\ApiBundle\Entity\Lang $lang)
    {
        $this->lang->removeElement($lang);
    }

    /**
     * Get lang
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLang()
    {
        return $this->lang;
    }
}
