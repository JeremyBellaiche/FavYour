<?php

namespace BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BaseBundle\Entity\Contact;
use BaseBundle\Entity\Answer;


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
	
	
	//Fonction pour contacter les administrateurs
	
	public function contactAction(Request $request)
	{
		
		$contact = new Contact();
		
		$form = $this->get('form.factory')->createBuilder('form', $contact)
			
			->add('mail',      'email')
			
			->add('content',   'textarea')
			
			->add('save',      'submit')
			
			->getForm()
	;
	
	$form->handleRequest($request);
	
	if ($form->isValid()) {

      $em = $this->getDoctrine()->getManager();
	  $contact->setDate(new \DateTime()); 
      $em->persist($contact);
      $em->flush();
		
      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
	  
	  $message = \Swift_Message::newInstance()
			
				->setSubject('Prise de contact FavYour')
				->setFrom('noreplyfavyour@gmail.com')
				->setTo($contact->getMail())
				->setBody(
				'Bonjour,
				
				
				Nous vous remercions de l\'intérêt que vous portez pour notre site FavYour.
				Nous réponderons dans les plus brefs délais à votre suggestion qui nous l\'espérons
				nous apportera un plus non négligeable.
				
				Cordialement, toute l\'équipe FavYour.
				
				
				Votre message : '.$contact->getContent()
			
			);
					
			$this->get('mailer')->send($message);
		
	
      return $this->redirect($this->generateUrl('homepage'));
    }
	
	
	return $this->render('BaseBundle:Home:contact.html.twig', array(
      'form' => $form->createView(),
    ));
		
	}
	
	//Fonction pour voir un message envoyé a l'admin
	
	public function answerAction($id, Request $request) {
		
		$contact = $this->getDoctrine()
						->getManager()
						->getRepository('BaseBundle:Contact')->find($id);
						
		if ($contact==null) throw new \Exception('Le contact d\'id '.$id.' n\'existe pas !');
						
		if ($contact->getAnswered()==true) 
		
			return $this->render('BaseBundle:Home:answer.html.twig', array(
      
			'answer' => $contact->getAnswer(),
	  
		   'contact' => $contact,
	  
			));
			
	
		
		$answer = new Answer();
		
		$form = $this->get('form.factory')->createBuilder('form', $answer)
        
		->add('content',    'textarea')
		
		->add('save',       'submit')
        
		->getForm()
    ;
	
		$form->handleRequest($request);
		
		if ($form->isValid()) {
			
			$answer->setDate(new \DateTime()); // nouvelle date de la réponse
			
			$answer->setContact($contact); // on relie la réponse à la demande
			
			$contact->setAnswered(true); // on dit que la demande a été répondue
			
			$em = $this->getDoctrine()->getManager();
			
			$em->persist($answer); // on enregistre la réponse en BDD
			
			$message = \Swift_Message::newInstance()
			
				->setSubject('Réponse de la part de FavYour')
				->setFrom('noreplyfavyour@gmail.com')
				->setTo($contact->getMail())
				->setBody($answer->getContent());
					
			$this->get('mailer')->send($message);
			
			$em->flush();			
			
			
			return $this
			  ->redirect($this->generateUrl('answer', array( 'id' => $contact->getId(), 'answer' => $contact->getAnswer(), 'contact' => $contact))); 
			
	}
	
		return $this->render('BaseBundle:Home:answer.html.twig', array(
      
	     'form' => $form->createView(),
	  
	  'contact' => $contact,
	  
    ));
	
	}
	
	//Pour voir TOUS les messages aux admins
	
	public function allAnswersAction() {
		
		return  $this->render('BaseBundle:Home:allAnswers.html.twig', array(
	  
	  'listeContacts' => $this->getDoctrine()
	  
							  ->getManager()
							  
							  ->getRepository('BaseBundle:Contact')
							  
							  ->findBy ( array('answered' => 'false'), array('date' => 'desc'))
	  
    ));
		
	}


   
}



