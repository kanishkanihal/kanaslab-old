<?php

namespace Acme\OrgBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeOrgBundle:Default:index.html.twig', array('name' => $name));
    }
}
