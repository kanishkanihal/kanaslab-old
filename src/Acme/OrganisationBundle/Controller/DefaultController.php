<?php

namespace Acme\OrganisationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeOrganisationBundle:Default:index.html.twig', array('name' => $name));
    }
}
