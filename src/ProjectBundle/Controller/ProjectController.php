<?php

namespace ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use ProjectBundle\Entity\Project;

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

    public function addAction(){
    	return $this->render("ProjectBundle:Push:newproject.html.twig");
    }




}
