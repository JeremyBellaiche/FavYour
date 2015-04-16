<?php

namespace UserBundle\Controller;

use FOS\UserBundle\Controller\SecurityController as BaseController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

class SecurityController extends BaseController
{
	protected function renderLogin(array $data)
    {
		if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY', 'IS_AUTHENTICATED_REMEMBERED'))
		{
			return $this->redirect($this->generateUrl('homepage'));
		}
		
		return $this->render('FOSUserBundle:Security:login.html.twig', $data);
	}
}