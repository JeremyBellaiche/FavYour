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
                    ->findByHomepage('1', array('id'=>'desc'), 4);


                        

        $lastProjects = $this->getDoctrine()->getManager()
                    ->getRepository('ProjectBundle:Project')
                    ->findBy(array(), array('id'=>'desc'), 3)
                    ;          


        return $this->render('BaseBundle:Home:index.html.twig', array(
            'projects' => $projects,
            'lastProjects' => $lastProjects
            )
             );
    }

 


    // Page Pushers : Route => /be-pushed
    /**
    * @Route("/be-pushed",name="bepushed")
    */
    public function bepushedAction(){
        return $this->render('ProjectBundle:Push:bepushed.html.twig');
    }

    public function newprojectAction(){
        return $this->render('ProjectBundle:Push:newproject.html.twig');
    }



   
}



