<?php

namespace GDS\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('GDSHomeBundle:Default:index.html.twig');
    }
    
    public function filmAction()
    {
        return $this->render('GDSHomeBundle:Film:film.html.twig');
    }
    
    public function partyAction()
    {
        return $this->render('GDSHomeBundle:Party:party.html.twig');
    }
}
