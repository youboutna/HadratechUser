<?php

namespace Hadratech\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HadratechUtilisateurBundle:Default:index.html.twig');
    }
}
