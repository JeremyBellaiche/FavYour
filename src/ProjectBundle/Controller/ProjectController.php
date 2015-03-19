<?php

namespace ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use ProjectBundle\Entity\Project;
use ProjectBundle\Form\ProjectType;

class ProjectController extends Controller
{
    /**
     * @Route("/project/{id}", name="project_show")
     * @ParamConverter("project", class="ProjectBundle:Project")
     * @Template()
     */
    public function showAction(Project $project)
    {
        return ['project' => $project];
    }


    /**
    * @Route("/new-project", name="new-project")
    */

    public function addAction(Request $request){

        $project = new Project();

        $form = $this->createForm(new ProjectType(), $project);
        $form->handleRequest($request);

        if($request->isMethod('POST') && $form->isValid) {
            $this->getDoctrine()->getManager()->persist($project);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirect($this->generateUrl('homepage'));
        }

        return $this->render("ProjectBundle:Push:newproject.html.twig", [
            'form'  =>  $form->createView()
        ]);
    }

    
    /**
    * @Route("/favoris", name="favoris")
    */
    public function favorisAction()
    {
        $favoris = $this->getDoctrine()->getManager()
                    ->getRepository('ProjectBundle:FavoritedProject')
                    ->findByUserId($usr= $this->get('security.context')->getToken()->getUser()->getId(), array('id'=>'desc'));

        return $this->render('ProjectBundle:Back:favproject.html.twig',[
            'favoris' => $favoris,
        ]);
    }


}  
