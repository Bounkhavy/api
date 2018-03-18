<?php

namespace Crowding\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lang
 *
 * @ORM\Table(name="lang")
 * @ORM\Entity
 */
class Lang
{
    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=5)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $code;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Crowding\ApiBundle\Entity\Domain", mappedBy="lang")
     */
    private $domain;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Crowding\ApiBundle\Entity\Translation", mappedBy="lang")
     */
    private $translation;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->domain = new \Doctrine\Common\Collections\ArrayCollection();
        $this->translation = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

