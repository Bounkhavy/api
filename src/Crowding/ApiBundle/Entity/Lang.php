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


    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Add domain
     *
     * @param \Crowding\ApiBundle\Entity\Domain $domain
     *
     * @return Lang
     */
    public function addDomain(\Crowding\ApiBundle\Entity\Domain $domain)
    {
        $this->domain[] = $domain;

        return $this;
    }

    /**
     * Remove domain
     *
     * @param \Crowding\ApiBundle\Entity\Domain $domain
     */
    public function removeDomain(\Crowding\ApiBundle\Entity\Domain $domain)
    {
        $this->domain->removeElement($domain);
    }

    /**
     * Get domain
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Add translation
     *
     * @param \Crowding\ApiBundle\Entity\Translation $translation
     *
     * @return Lang
     */
    public function addTranslation(\Crowding\ApiBundle\Entity\Translation $translation)
    {
        $this->translation[] = $translation;

        return $this;
    }

    /**
     * Remove translation
     *
     * @param \Crowding\ApiBundle\Entity\Translation $translation
     */
    public function removeTranslation(\Crowding\ApiBundle\Entity\Translation $translation)
    {
        $this->translation->removeElement($translation);
    }

    /**
     * Get translation
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTranslation()
    {
        return $this->translation;
    }
}
