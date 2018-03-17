<?php

namespace Crowding\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Translation
 *
 * @ORM\Table(name="translation", uniqueConstraints={@ORM\UniqueConstraint(name="domain_id", columns={"domain_id", "code"})}, indexes={@ORM\Index(name="IDX_B469456F115F0EE5", columns={"domain_id"})})
 * @ORM\Entity
 */
class Translation
{
    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=false)
     */
    private $code;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Crowding\ApiBundle\Entity\Domain
     *
     * @ORM\ManyToOne(targetEntity="Crowding\ApiBundle\Entity\Domain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="domain_id", referencedColumnName="id")
     * })
     */
    private $domain;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Crowding\ApiBundle\Entity\Lang", inversedBy="translation")
     * @ORM\JoinTable(name="translation_to_lang",
     *   joinColumns={
     *     @ORM\JoinColumn(name="translation_id", referencedColumnName="id")
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

