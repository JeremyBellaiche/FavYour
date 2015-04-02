<?php
namespace ProjectBundle\Controller;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ProjectBundle\Entity\Project;
use ProjectBundle\Entity\FavoritedProject;
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
     * @Route("/edit/{id}", name="edit")
     * @ParamConverter("project", class="ProjectBundle:Project")
     * @Template()
     */
    public function editAction(Project $project)
    {
        $em = $this -> getDoctrine() -> getEntityManager();

        $form = $this -> createForm(new ProjectType(), $project);

        $request = $this ->getRequest();

        if($request -> isMethod('POST')){

            $form->bindRequest($request);

            if($form->isValid()){
                $p = $form -> getData();
                $em -> persist($p);
                $em -> flush();

                return $this -> redirect( 
                    $this -> generateUrl('/project/{id}', array(
                        'id' => $p -> getId(),
                 ))
                );
            }
        }   

        return $this -> render('ProjectBundle:Project:edit.html.twig', array(
            'id' => $project -> getId(),
            'form' => $form -> createView(),
             ));
    }




    /**
    * @Route("/new-project", name="new-project")
    */
    public function addAction(Request $request){
            $project = new Project();
            $form = $this->get('form.factory')->create(new ProjectType(), $project);
            
            if($form -> handleRequest($request)->isValid()){
                $em = $this -> getDoctrine() -> getManager(); 
                $project->upload();



                $em -> persist($project);
                $em -> flush();
            return $this->redirect($this->generateUrl('homepage'));
            }
            return $this->render("ProjectBundle:Push:newproject.html.twig", array(
                'form'  =>  $form->createView()));
    }




    /** $project = new Project();
        $form = $this->createForm(new ProjectType(), $project);
        $form->handleRequest($request);
        if($request->isMethod('POST') && $form->isValid) {
            $this->getDoctrine()->getManager()->persist($project);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirect($this->generateUrl('homepage'));
        }
        return $this->render("ProjectBundle:Push:newproject.html.twig", [
            'form'  =>  $form->createView()
        ]);**/
    
    /**
    * @Route("/favoris", name="favoris")
    */
    public function favorisAction()
    {

        $userId = $this->get('security.token_storage')->getToken()->getUser();

        // liste des favoris de l'user 
        $favorisForUser = $this->getDoctrine()->getManager()
        ->getRepository('ProjectBundle:FavoritedProject')
        ->findByUserId($userId);

        // Création d'un tableau vide
        $favoris = array();

        $id = array();

        foreach ($favorisForUser as $key => $value) {
            $project = $this->getDoctrine()->getManager()
            ->getRepository('ProjectBundle:Project')
            ->findById($value->getProjectId());


            array_push($favoris, $project); 
        }
//        return new Response( var_dump($id) );
        
        return $this->render('ProjectBundle:Back:favproject.html.twig', array(
            'projets' => $favoris
        ));
        
    }









    /**
    * @Route("/myprojects", name="myprojects")
    */
    public function myprojectsAction (){


            $currentId = $this->get('security.token_storage')->getToken()->getUser();

            $Projects = $this->getDoctrine()->getManager()
                    ->getRepository('ProjectBundle:Project')
                    ->findByAuthor($currentId);

        return $this -> render('ProjectBundle:Back:myprojects.html.twig', array(
            'Projects' => $Projects,
            ));
    }



    /**
     * @Route("/desactive/{id}", name="desactive")
     * @ParamConverter("project", class="ProjectBundle:Project")
     */
    public function desactiveAction(Project $project)
    {
        if( $project->getAuthor() == $this->getUser()->getId() ){

            $em = $this->getDoctrine()->getEntityManager();
            $item = $em->getRepository('ProjectBundle:Project')->findOneById($project->getId());
            $item->setActive(0);
            $em->flush();
        }
        return $this -> redirect($this -> generateUrl('myprojects'));

    }

     /**
     * @Route("/ajouter-favoris/{id}", name="ajouter-favoris")
     * @ParamConverter("project", class="ProjectBundle:Project")
     */
    public function ajouterFavorisAction(Project $project)
    {
        if( $this->getUser()->getId() ){

            $currentProjectId = $project->getId();

            $favoris = new FavoritedProject;
            $favoris->setUserId( $this->getUser()->getId() );
            $favoris->setProjectId($currentProjectId);

            $em = $this->getDoctrine()->getManager();
            $em->persist($favoris);

            $em->flush();

        }
        return $this -> redirect($this -> generateUrl('favoris'));

    }


    /**
     * @Route("/remove-favoris/{id}", name="remove-favoris")
     * @ParamConverter("project", class="ProjectBundle:Project")
     */
    public function removeFavorisAction(Project $project)
    {


            $em = $this->getDoctrine()->getEntityManager();
            $item = $em->getRepository('ProjectBundle:FavoritedProject')->findOneByUserId($project->getId());
            $em->remove($item);
            $em->flush();

        return $this -> redirect($this -> generateUrl('favoris'));

    }




}  