<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ProjectBundle\Entity\Project;
use ProjectBundle\Form\ProjectType;
use UserBundle\Entity\User;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UserBundle:Default:index.html.twig', array('name' => $name));
    }


    public function paramAction(){

  

		return $this->render('UserBundle:Parameters:param.html.twig');

    }



     /**
     * @Route("/profil/{id}", name="profil_show")
     * @ParamConverter("user", class="UserBundle:User")
     * @Template()
     */
    public function showAction(User $user)
    {

        $em = $this -> getDoctrine() -> getEntityManager();

            $Projects = $this->getDoctrine()->getManager()
                    ->getRepository('ProjectBundle:Project')
                    ->findByAuthor($user->getId());

    
        return ['user' => $user,'Projects' => $Projects];
    }

}
