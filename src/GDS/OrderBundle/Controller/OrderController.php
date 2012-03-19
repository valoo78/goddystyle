<?php

namespace GDS\OrderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class OrderController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('GDSOrderBundle:Liste:index.html.twig');
    }
    public function menuAction($resto)
    {
        return $this->render('GDSOrderBundle:Liste:menu.html.twig');
    }
    public function recapAction()
    {
        return $this->render('GDSOrderBundle:Liste:recap.html.twig');
    }
    public function confirmAction()
    {
        return $this->render('GDSOrderBundle:Liste:recap.html.twig');
    }
}

