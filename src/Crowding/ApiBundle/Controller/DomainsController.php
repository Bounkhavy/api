<?php

namespace Crowding\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Crowding\ApiBundle\Entity\Domains;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\FOSRestController;


class DomainsController extends FOSRestController
{
    /**
     * @Rest\Get("/user")
     */
    public function showAction()
    {

        $repository = $this->getDoctrine()->getRepository('ApiBundle:Domain');

        $domain = $repository->findAll();


        return $domain;

    }
}
