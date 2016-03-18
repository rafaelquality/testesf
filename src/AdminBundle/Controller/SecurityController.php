<?php
	
	namespace AdminBundle\Controller;
	
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
	
	/**
	 * @Route("/")
	 * @Template
	 */
	class SecurityController extends Controller {
		
		/**
		 * @Route("/login/", name = "admin_login")
		 */
		public function loginAction(Request $request) {
			$authenticationUtils = $this->get('security.authentication_utils');
			/* @var $authenticationUtils AuthenticationUtils */
			
			// get the login error if there is one
			$error = $authenticationUtils->getLastAuthenticationError();
			
			// last username entered by the user
			$lastUsername = $authenticationUtils->getLastUsername();
			
			return array(
				'last_username' => $lastUsername,
				'error'         => $error,
			);
		}
	}
