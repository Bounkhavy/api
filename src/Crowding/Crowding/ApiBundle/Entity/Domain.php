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

}

