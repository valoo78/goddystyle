<?php

namespace GDS\OrderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('GDSOrderBundle:Default:index.html.twig', array('name' => $name));
    }
}
