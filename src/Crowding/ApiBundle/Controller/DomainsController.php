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
use JMS\Serializer\SerializationContext;
use FOS\RestBundle\Context\Context;


class DomainsController extends FOSRestController
{
    /**
     * @Rest\Get("/domains.json")
     */
    public function showAction()
    {

        $repository = $this->getDoctrine()->getRepository('ApiBundle:Domain');

        $domain = $repository->findAll();
        

        $data = [	"code" => 200,
                "message" => "success",
                "datas" => $domain
        ];


        $view = $this->view($data, 200);
        $view->getContext()->setGroups(array('AllDomain'));

        return $this->handleView($view);

    }
}
