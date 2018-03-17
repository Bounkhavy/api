<?php

namespace Crowding\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
/*         return $this->render('ApiBundle:Default:index.html.twig');
 */        return $this->render("@Api/Default/index.html.twig");

    }
}
