<?php

namespace Proyecto\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ProyectoUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
