<?php

namespace Crowding\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Crowding\ApiBundle\Entity\Domains;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DomainsController extends FOSRestController
{
    /**
     * @Rest\Get("/domains.json")
     */
    public function showAction()
    {

        $repository = $this->getDoctrine()->getRepository('ApiBundle:Domain');

        $domain = $repository->findAll();
/*         $view = $this->view($domain, Response::HTTP_OK);
        return $view;
 */        
 $view = $this->view($domain, 200);

        // ...

        return $this->handleView($view);

    }
}
