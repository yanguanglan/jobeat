<?php

namespace Forlang\JobeatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('ForlangJobeatBundle:Default:index.html.twig', array('name' => $name));
    }
}
