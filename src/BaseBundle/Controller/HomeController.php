<?php

namespace BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HomeController extends Controller
{
    /**
    * @Route("/", name="homepage")
    */
    public function indexAction()
    {
        return $this->render('BaseBundle:Home:index.html.twig',[
            'projects' => array(
                    array('title'=>'Mon super projet1', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, doloremque?', 'image'=>'image1.png'),
                    array('title'=>'Mon super projet2', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, doloremque?', 'image'=>'image1.png'),
                    array('title'=>'Mon super projet3', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, doloremque?', 'image'=>'image1.png'),
                ),
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