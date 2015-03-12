<?php

namespace BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HomeController extends Controller
{
    // Page d'Accueil : Route => /
    /**
    * @Route("/", name="homepage")
    */
    public function indexAction()
    {
        $projects = $this->getDoctrine()->getManager()
                    ->getRepository('ProjectBundle:Project')
                    ->findByHomepage('1');

        return $this->render('BaseBundle:Home:index.html.twig',[
            'projects' => $projects,
        ]);
    }

    /*
    public function indexAction()
    {
        return $this->render('KnpKnoodleBundle:Survey:index.html.twig', [
            'name' => 'IIM'
        ]);
    }
    */

}