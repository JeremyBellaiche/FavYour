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
use UserBundle\Form\IdentityPictureType;

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
                    ->findByAuthor($user->getUsername());
		
		/* Upload photo profil */
            
        $form = $this->createForm(new IdentityPictureType(), $user);

        if ($this->getRequest()->getMethod() === 'POST') {
            $form->bind($this->getRequest());
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                
                $user->uploadProfilePicture();
                
                $em->persist($user);
                $em->flush();

                $this->redirect($this->generateUrl('homepage'));
			}
		}
    
        return $this->render('UserBundle:Default:show.html.twig', array('user' => $user, 'id' => $user->getId(), 'Projects' => $Projects, 'form' => $form->createView()));
    }

}
