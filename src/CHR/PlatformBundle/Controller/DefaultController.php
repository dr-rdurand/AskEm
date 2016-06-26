<?php

namespace CHR\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        return $this->render('CHRPlatformBundle:Default:sondage.html.twig');
    }

    /**
     * @Route("/form", name="sondage_new")
     */
    public function formAction()
    {
        return $this->render('CHRPlatformBundle:Default:form.html.twig');
    }

    /**
     * @Route("/connect", name="user_connexion")
     */
    public function connexionAction()
    {
        return $this->render('CHRPlatformBundle:Default:connexion.html.twig');
    }
}
